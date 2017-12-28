<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_top_navbar.php'); ?>
<?php include('admin_sidebar.php'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-plus fa-fw"></i>Add Student</h1>
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
								<form  method="POST" action="save_student.php" enctype="multipart/form-data">
									<div class="form-group">
										<label >Student Matric Number</label>
										<input class="form-control" type="text" id="inputEmail" name="matric_no"  placeholder="Matric Number" required>
									</div>
									<div class="form-group">
										<label >Name</label>
										<input class="form-control" type="text" id="inputPassword" name="name"  placeholder="Full Name" required>
									</div>
									<div class="form-group">
										<label >IC number</label>
										<input class="form-control" type="text" id="inputPassword" name="ic_number"  placeholder="Ic Number" required>
									</div>
									<div class="form-group">
										<label>Password</label>
										<input class="form-control" type="password" id="pwd" name="password"  placeholder="Shh.... Do not let other people know your password!!!" required>
                                         <div class="pull-right">
                                         	<button type="button" onclick="showHide()" class="btn btn-outline btn-primary btn-sm" id="eye">
                                        		<i class="fa fa-eye">Show/Hide Password</i>
                                        	</button>
                                    	</div>
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
                                    <div class="form-group">
                                    	<label>Email</label>
                                        <input class="form-control" type="email" id="imputEmail" name="email" placeholder="What your email?" required>
                                    </div>
									<div class="form-group">
										<label>Gender</label>
										<select class="form-control" name="gender" required>
											<option></option>
											<option>Male</option>
											<option>Female</option>
										</select>
									</div>
									<div class="form-group">
										<label>Adddress:</label>
										<textarea class="form-control" type="text" id="inputPassword" name="address"  placeholder="Home Address" required></textarea>
									</div>
									<div class="form-group">
										<label>Cellphone Number:</label>
										<input class="form-control" type='tel' pattern="[0-9]{10,10}" class="search" name="contact"  placeholder="Phone Number"  autocomplete="off"  maxlength="11" >
									</div>
                                    
                                    <div class="form-group">
										<label>Year Level</label>
										<select class="form-control" name="yearLevel" required>
											<option></option>
											<option>First Year</option>
											<option>Second Year</option>
                                            <option>Third Year</option>
                                            <option>Fourth Year</option>
										</select>
									</div>	
									
									<div class="pull-right">
										<div class="form-group">
											<div class="forms">
												<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>Save</button>
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