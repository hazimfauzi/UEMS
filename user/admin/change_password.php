<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_top_navbar.php'); ?>
<?php include('admin_sidebar.php'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Change Password</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
                	<div class="col-lg-8">
						<div class="panel panel-info">
							<div class="panel-heading">
                                Please Enter Details Below...
							</div>
							<div class="panel-body">
                            
								<form  method="POST" enctype="multipart/form-data">
                                	<?php
									if (isset($_POST['submit'])){
									$op = $_POST['op'];
									$np = $_POST['np'];
									$rp = $_POST['rp'];
									$query=mysql_query("select password from user where userId='$session_id'")or die(mysql_error());
									$row=mysql_fetch_array($query);	
									$hashPass = $row[0];
									$hash = password_verify($op, $hashPass); 	
									
									
									
									if($hash == 0){
									?>
									<div class="alert alert-danger">Old Password Not Match</div>
									<?php
									}	
									else if($np!=$rp){
									?>
									<div class="alert alert-danger">New Password Not Match</div>
									<?php
									}else{
									$encryptPass = password_hash($np, PASSWORD_DEFAULT);
									mysql_query("update user set password = '$encryptPass' where userId = '$session_id' ")or die(mysql_error); ?>
									<div class="alert alert-success">Password Changed</div>
                                    
									<?php }}?>
									<div class="form-group">
										<label>Current Password</label>
										<input class="form" type="password" id="pwd" name="op"  placeholder="Old Password" required>
                                        <button type="button" onclick="showHide()" class="btn btn-outline btn-primary btn-sm" id="eye">
                                        	<i class="fa fa-eye"></i>
                                        </button>
									</div>
                                    <div class="form-group">
										<label>New Password.       :</label>
										<input class="form" type="password" id="pwd" name="np"  placeholder="New Password" required>
                                    </div>
                                    <div class="form-group">
										<label>Retype Password</label>
										<input class="form" type="password" id="pwd" name="rp"  placeholder="Retype Password" required>
                                    </div>
                                    <script> 
									function show() {
										var p = document.getElementById('pwd');
										p.setAttribute('type', 'text');
									}
									
									function hide() {
										var p = document.getElementById('pwd');
										p.setAttribute('type', 'password');
									}
									
									var pwShown = 0;
									
									document.getElementById("eye").addEventListener("click", function () {
										if (pwShown == 0) {
											pwShown = 1;
											show();
										} else {
											pwShown = 0;
											hide();
										}
									}, false);
                                    </script>
                                    	
									
									<div class="pull-right">
										<div class="form-group">
											<div class="forms">
												<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>Change Password</button>
												<button type="reset" class="btn btn-danger ">Reset Button</button>
											</div>
										</div>
									</div>
								</form>					
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