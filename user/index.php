<?php include('header.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Please Sign In</h3>
        </div>
        <div class="panel-body">
        <form method="POST">
          <div class="form-group">
            <input class="form-control" name="username" type="text" id="username" placeholder="User ID" autofocus required>
          </div>
          <div class="form-group">
            <input class="form-control" name="password" type="password" id="password" placeholder="Password" autofocus required>
          </div>
          <div class="control-group">
            <div class="controls">
              <center>
                <a href="forgot_password.php" class="list-inline">&nbsp;Forgotten password?</a>
              </center>
            </div>
          </div>
          </div>
          <div class="modal-footer">
          <button id="login" name="submit" type="submit" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
          <a class="btn btn-default" href="../index.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
          <?php
										if (isset($_POST['submit'])){
											session_start();
											$username = $_POST['username'];
											$password = $_POST['password'];
											$sql = "SELECT * FROM user WHERE userId='$username'";
											$result2 = mysql_query($sql)or die(mysql_error());
											$row2 = mysql_fetch_assoc($result2);
											$num_row2 = mysql_num_rows($result2);
											$hashPass = $row2['password'];
											$hash = password_verify($password, $hashPass);
											
											if($num_row2 == 0){?>
          <div class="alert alert-danger">Invalid User Name...</div>
          <?php
												
											}else{
											if($hash == 0){?>
          <div class="alert alert-danger">Wrong Password!!!</div>
          <?php 
											}
											else{
											
											$query = "SELECT * FROM user WHERE userId='$username' AND password='$hashPass'";
											$result = mysql_query($query)or die(mysql_error());
											$num_row = mysql_num_rows($result);
											$row=mysql_fetch_array($result);
											if( $row['status'] == 'Banned' ){ ?>
          <div class="alert alert-danger">You have been banned!!!</div>
          <?php }
											else if( $row['level'] == 'Admin' ) {
												$_SESSION['id']=$row['userId'];
												header('Location:../user/admin/index.php');
												exit;
												}
									
											else if( $row['level'] == 'Student' ) {
												$_SESSION['id']=$row['userId'];
												header('Location:../user/student/index.php');
												exit;
												}
									
											else if( $row['level'] == 'Organizer' ) {
												$_SESSION['id']=$row['userId'];
												header('Location:../user/organizer/index.php');
												exit;
												}
									
											else{ ?>
          <div class="alert alert-danger">Access Denied</div>
          <?php
												}}}}
												?>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
