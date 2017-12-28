<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_top_navbar.php'); ?>
<?php include('admin_sidebar.php'); ?>
<?php 	$user_query=mysql_query("select * from user where userId ='$session_id'")or die(mysql_error());
		$row=mysql_fetch_array($user_query)
									 ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Profile</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
                	<div class="col-lg-8">
						<div class="panel panel-info">
							<div class="panel-heading">
                                Your Profile...
                                <div class="pull-right">
                                	<a  title="Edit" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#editModal"><i class="fa fa-edit fa-2x"></i></a>
                                    <?php include('edit_profile_modal.php'); ?>
                                </div>
							</div>
							<div class="panel-body">
									<div class="form-group">
										<label >Staf Number</label>
										<p class="form-control"><?php echo $row['userId']; ?></p>
									</div>
									<div class="form-group">
										<label >Name</label>
										<p class="form-control"><?php echo $row['name']; ?></p>
									</div>
									<div class="form-group">
										<label >IC number</label>
										<p class="form-control"><?php echo $row['icNum']; ?></p>
									</div>
									<div class="form-group">
                                    	<label>Email</label>
                                        <p class="form-control"><?php echo $row['email']; ?></p>
                                    </div>	
									<div class="form-group">
                                    	<label>Gender</label>
                                        <p class="form-control"><?php echo $row['gender']; ?></p>
                                    </div>
									<div class="form-group">
										<label>Adddress:</label>
										<p class="form-control"><?php echo $row['address']; ?></p>
									</div>
									<div class="form-group">
										<label>Cellphone Number:</label>
										<p class="form-control"><?php echo $row['phoneNum']; ?></p>
									</div>	
									
													
							</div>		
						</div>
					</div>
				</div>
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