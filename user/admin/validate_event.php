<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_top_navbar.php'); ?>
<?php include('admin_sidebar.php'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-filter fa-fw"></i>Event Validation</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                       
                                        <center>
                                            <th><center>Event Banner</center></th>
											<th><center>Title</center></th>                                 
											<th><center>Categoty</center></th>
											<th><center>Location</center></th>
											<th><center>Start Date</center></th>
											<th><center>End Date</center></th>
											<th><center>Max Participant</center></th>
                                            <th><center>Event Detail</center></th>
											<th><center>Action</center></th>
										</center>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from event where eventStatus = 'Pending'")or die(mysql_error());
								  $bil=0;
									while($row=mysql_fetch_assoc($user_query)){
									$bil++;
									
									$id=$row['eventId'];
									$image='../../upload/'.$row['eventBanner'];  
									$imageData = base64_encode(file_get_contents($image));
									$src = 'data: '.mime_content_type($image).';base64,'.$imageData;?>
                                    
									<tr class="del<?php echo $id ?>">
                                        <td><?php echo '<img width="300" height="100" src="' . $src . '">' ?></td>
										<td><?php echo $row['eventTitle']; ?> </td> 
										<td><?php echo $row['eventCategory']; ?> </td> 
										<td><?php echo $row['eventLocation']; ?> </td>
										<td><?php echo $row['startDate']; ?></td>
										<td><?php echo $row['endDate']; ?></td>
                                        <td><?php echo $row['maxParticipant']; ?></td>
                                        <td width="100">
                                         <a  title="Edit" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"> Click for more detail</a>
                                         <?php include("event_detail_modal.php");?>
                                        </td>
                                        <td><button class="btn btn-success" title="Click to Accept" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#validateEvent<?php echo $id; ?>">Accept</button>
                                        <button class="btn btn-danger" title="Click to Reject" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#rejectEvent<?php echo $id; ?>">Reject</button>
                                        <?php include('validate_event_modal.php')?>
                                        </td>
                                        
										
								    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
						<!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                
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