<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_top_navbar.php'); ?>
<?php include('admin_sidebar.php'); ?>
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
                
                <form method="POST">
                						<?php
										
										if (isset($_POST['register'])){
											$eventId = $id;
											$userId = $session_id;
											$sql = "SELECT reportId FROM report WHERE userId='$userId' and eventId='$eventId' ";
											$result3 = mysql_query($sql)or die(mysql_error());
											$row3 = mysql_fetch_assoc($result3);
											$num_row3 = mysql_num_rows($result3);
											
											
											if($num_row3 == 1){?>
												<div class="alert alert-danger">You Already Register This Event</div><?php 
											}
											else{
											
											mysql_query("insert into report(userId,eventId) values('$userId','$eventId')")or die(mysql_error());
											
											
											
											 $query = mysql_query("select totalParticipant from event where eventId = '$eventId' ")or die(mysql_error());
											 $row = mysql_fetch_array($query);
											 $totalParticipant  = $row['totalParticipant'] + 1;
											 mysql_query("update event set totalParticipant='$totalParticipant' where eventId = '$eventId'")or die(mysql_error());
											?>
												<div class="alert alert-success"><center>Rigistration Done</center></div><?php
											}}
												?>
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
                            	<p>Date : <strong><?php echo $row['startDate']; ?></strong> until <strong><?php echo $row['endDate']; ?></strong></p>
                            	<p>Location :</p>
								<p><strong><?php echo $row['eventLocation']; ?></strong></p>
                                UTeM 
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