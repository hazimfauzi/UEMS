<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_top_navbar.php'); ?>
<?php include('admin_sidebar.php'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-group fa-fw"></i>All Admin</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                       
                                        <center>
                                        	<th><center>No.</center></th>
											<th><center>Staff No.</center></th>                                 
											<th><center>Name</center></th>
											<th><center>Ic Number</center></th>
                                            <th><center>Email</center></th>
											<th><center>Gender</center></th>
											<th><center>Address</center></th>
											<th><center>Phone No.</center></th>
											<th><center>Action</center></th>
										</center>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from user where level='Admin' and userId !='$session_id'")or die(mysql_error());
								  $bil=0;
									while($row=mysql_fetch_array($user_query)){
									$bil++;
									$id=$row['userId'];  ?>
									<tr class="del<?php echo $id ?>">
                                    	<td><?php echo $bil; ?></td>
										<td><?php echo $row['userId']; ?></td>
										<td><?php echo $row['name']; ?> </td> 
										<td><?php echo $row['icNum']; ?> </td> 
										<td><?php echo $row['email']; ?> </td>  
										<td><?php echo $row['gender']; ?> </td>
										<td><?php echo $row['address']; ?></td>
										<td><?php echo $row['phoneNum']; ?></td> 
										<td>
                                        	<a  title="Click for more info" href="details_organizer.php<?php echo '?createdBy='.$id; ?>">View Admin Profile</a>
                                        </td>
								    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
                            <?php include('edit_admin_modal.php'); ?>
							<?php include('delete_admin_modal.php'); ?>
                            
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

    <!-- DataTables JavaScript -->
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>

</html>    