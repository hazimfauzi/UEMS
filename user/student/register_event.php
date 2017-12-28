<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('student_top_navbar.php'); ?>
<?php include('student_sidebar.php'); ?>
<?php
$id=$_GET['id'];
?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="col-lg-12">
                	<h1 class="page-header"><i class="fa fa-thumb-tack fa-fw"></i>Register Event</h1>
                </div>
                    <!-- /.col-lg-12 -->
                <form method="POST">
                <?php
                $query = "SELECT * from event WHERE eventId = '$id'";
                $result = mysql_query($query)or die(mysql_error());
                while($row=mysql_fetch_array($result)){;?>
                <div class="row">
                	<div class="col-lg-5">
                    	<?php $image='../../upload/'.$row['eventBanner'];  
							  $imageData = base64_encode(file_get_contents($image));
							  $src = 'data: '.mime_content_type($image).';base64,'.$imageData; ?>
							  <div class="panel panel-default"><div class="panel-heading">
                              	<center>	
                                	<p></p>
									<?php echo '<img width="370" height="140" src="' . $src . '">' ?>
                                    <p></p>
                              	</center>
                              </div></div>
						
					</div>
                	<div class="col-lg-7">
                    	<h3><strong><?php echo $row['eventTitle']; ?></strong></h3>
                        <p>Category : <strong><?php echo $row['eventCategory']; ?></strong></p>
						<p>Location : <strong><?php echo $row['eventLocation']; ?></strong></p>
                        Date : <strong><?php echo $row['startDate']; ?></strong> until <strong><?php echo $row['endDate']; ?></strong>
                    </div>
                    
                </div>
                
                
                <div class="row">
                	<div class="col-lg-7">
                    
                    	<div class="panel panel-default">
                        	<div class="panel-heading">
                            	<strong>Order Summary</strong>
                        	</div>
                        	<div class="panel-body">
                            	<div class="col-lg-9">
                                	<strong>TYPE</strong>
                                    <p><?php echo $row['eventTitle']; ?></p>
                                </div>
                                <div class="col-lg-2">
                                	<strong>QUANTITY</strong>
                                    <p>1</p>
                                </div>
                        	</div>
                        </div>
                        
                        <div class="panel panel-default">
                        	<div class="panel-heading">
                            	<strong>Registration Information</strong>
                        	</div>
                        	<div class="panel-body">
								<?php
                                $query2 = "SELECT * from user WHERE userId = '$session_id'";
                                $result2 = mysql_query($query2)or die(mysql_error());
                                while($row2=mysql_fetch_array($result2)){;?>
                                	<div class="col-lg-3">
                                		<strong>
                                        	<p>FULL NAME  </p>
                                			<p>EMAIL </p>
                                            <p>PHONE NO </p>
                                        </strong>
                                	</div>
                                    <div class="col-lg-9">
                                    	<p>:<?php echo $row2['name']; ?></p>
                                        <p>:<?php echo $row2['email']; ?></p>
                                        <p>:<?php echo $row2['phoneNum']; ?></p>
                                        <h6>I agree that UEMS may share my information with the event organizer</h6>
                                    </div>
                                    <div class="pull-right">
                                    	<button id="register" name="register" type="register" class="btn btn-success">&nbsp;Complete Register</button>
                                        <a class="btn btn-default" href="index.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                                    </div>
                                    
                                
                                <?php }?>
                            	
                        	</div>
                    	</div>
                    </div>
                    
                    <div class="col-lg-5">
                    	<div class="panel panel-default">
                        	<div class="panel-heading">
                            	<strong>When & Where</strong>
                        	</div>
                        	<div class="panel-body">
                            	<p><strong>Date : </strong><?php echo $row['startDate']; ?> until <?php echo $row['endDate']; ?></p>
                            	<p><strong>Location :</strong></p>
								<p><?php echo $row['eventLocation']; ?>,</p>
                                <p>Universiti Teknikal Malaysia Melaka, Hang Tuah Jaya,</p>
                                <p>76100 Durian Tunggal, Melaka,</p>
                                <p>Malaysia.</p>
                                   
                        	</div>
                    	</div>
                        
                        <div class="panel panel-default">
                        	<div class="panel-heading">
                            	<strong>Organizer</strong>
                        	</div>
                        	<div class="panel-body">
                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        	</div>
                    	</div>
                        
                    </div>
                    
                						<?php
										
										if (isset($_POST['register'])){
											$eventId = $id;
											$userId = $session_id;
											$eventTitle=$row['eventTitle'];
											$qrCode=$eventId.$userId.'.png';
											$sql = "SELECT reportId FROM report WHERE userId='$userId' and eventId='$eventId' ";
											$result3 = mysql_query($sql)or die(mysql_error());
											$row3 = mysql_fetch_assoc($result3);
											$num_row3 = mysql_num_rows($result3);
											  
											
											if($num_row3 == 1){?>
												<div class="alert alert-danger">You Already Register This Event</div><?php 
											}
											else{
											//insert data to database report
											mysql_query("insert into report(userId,eventId,attendanceStatus,qrCode) 
																	values('$userId','$eventId','absent','$qrCode')
														")or die(mysql_error());
											
											
											
											 $query = mysql_query("select totalParticipant from event where eventId = '$eventId' ")or die(mysql_error());
											 $row = mysql_fetch_array($query);
											 $totalParticipant  = $row['totalParticipant'] + 1;
											 mysql_query("update event set totalParticipant='$totalParticipant' where eventId = '$eventId'")or die(mysql_error());	
												
												
											//for get qr code
											include('getCode.php');
											
											
											 
											 //for send to email
											 $emailquery = mysql_query("SELECT
																		  report.reportId,
																		  event.*,
																		  report.attendanceStatus,
																		  report.qrCode,
																		  user.*  
																		FROM report
																		INNER JOIN
																		  user ON report.userId = user.userId
																		INNER JOIN
																		  event ON report.eventId=event.eventId
																		WHERE
																		  report.qrCode = '$qrCode';
																		  ")or die(mysql_error());
											 for($i=1; $i<$emailrow = mysql_fetch_assoc($emailquery); $i++){							  
											 $startDate=$emailrow['startDate'];
											 $endDate=$emailrow['endDate'];
											 $eventLocation=$emailrow['eventLocation'];
											 $qrimage='http://uems.tk/QRCODE/'.$emailrow['qrCode'];  
											 
											 require '../../PHPMailer/PHPMailerAutoload.php';

											$mail = new PHPMailer;
											
											$mail->isSMTP();                                   // Set mailer to use SMTP
											$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
											$mail->SMTPAuth = true;                            // Enable SMTP authentication
											$mail->Username = 'uems4dmin@gmail.com';          // SMTP username
											$mail->Password = 'hazimfauzi'; // SMTP password
											$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
											$mail->Port = 587;                                 // TCP port to connect to
											
											$mail->setFrom('uems4dmin@gmail.com', 'UEMS');
											$mail->addReplyTo('uems4dmin@gmail.com', 'UEMS');
											$mail->addAddress($emailrow['email']);   // Add a recipient
											//$mail->addCC('cc@example.com');
											//$mail->addBCC('bcc@example.com');
											
											$mail->isHTML(true);  // Set email format to HTML
											
											$bodyContent = '<h1>Successful Register To An Event</h1>';
											$bodyContent .= '
											You Are now <b>successful</b> register to '.$eventTitle.' <br/><br/><b>
											This your QRCode for this event <br/> 
											'.'<img  src="'.$qrimage.'">'.'<br/><br/>
											
											Title : '.$eventTitle.'<br/>
											Date : '.$startDate.' until '.$endDate.'<br/>

											Location :<br/>
											'.$eventLocation.'<br/>
											Universiti Teknikal Malaysia Melaka, Hang Tuah Jaya,<br/>
											76100 Durian Tunggal, Melaka,<br/>
											Malaysia.<br/><br/>
											
											Thank you,<br/>
											UTeM Event Management System <br/>
											http://uems.16mb.com/UEMS/<br/>
											This is a Message email itself automatically. Please do not reply to this email.<br/>';
											
											
											$mail->Subject = 'Succsessful Register To UEMS';
											$mail->Body    = $bodyContent;
											$mail->send();
											 
											 }
											?><script> window.location="my_ticket.php?hazim=<?php echo $eventTitle ?>" </script>;<?php
											}}
												?>
                    </form>
                </div>
                
                
                <?php }  ?>
                
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>
</body>

</html> 