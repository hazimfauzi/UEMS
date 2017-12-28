<?php include('header.php');
$userId=$_GET['userId'];
?>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"><center><strong>Change Password</strong></center></h3>
        </div>
        <div class="panel-body">
        <form method="POST">
          <strong>
          	Dear <?php echo $userId ?>,<br/> </strong>
            You need to change your recovery password
         
          <div class="form-group">
            <input class="form-control" name="password" type="password" id="password" placeholder="Your Recovery Password" autofocus required>
            <h6>*check your email to get your recovery password</h6>
          </div>
          <div class="form-group">
            <input class="form-control" name="np" type="password" id="np" placeholder="New Password" autofocus required>
          </div>
          <div class="form-group">
            <input class="form-control" name="rp" type="password" id="rp" placeholder="Retype New Password" autofocus required>
          </div>
          <div class="modal-footer">
          <button id="login" name="submit" type="submit" class="btn btn-success">&nbsp;Change</button>
          <a class="btn btn-default" href="../index.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
          <?php
										if (isset($_POST['submit'])){
											session_start();
											$password = $_POST['password'];
											$np = $_POST['np'];
											$rp = $_POST['rp'];
											$sql = "SELECT * FROM user WHERE userId='$userId'";
											$result2 = mysql_query($sql)or die(mysql_error());
											$row2 = mysql_fetch_assoc($result2);
											$hashPass = $row2['password'];
											$hash = password_verify($password, $hashPass);
											
											if($hash == 0){
											?>
											<div class="alert alert-danger">Recovery Password Not Match</div>
											<?php
											}	
											else if($np!=$rp){
											?>
											<div class="alert alert-danger">New Password Not Match</div>
											<?php
											}else{
											$encryptPass = password_hash($np, PASSWORD_DEFAULT);
											mysql_query("update user set password = '$encryptPass' where userId = '$userId' ")or die(mysql_error);
											
											
											if( $row2['status'] == 'Banned' ){ ?>
          <div class="alert alert-danger">You have been banned!!!</div>
          <?php }
											else if( $row2['level'] == 'Admin' ) {
												$_SESSION['id']=$row2['userId'];
												header('Location:../user/admin/index.php');
												exit;
												}
									
											else if( $row2['level'] == 'Student' ) {
												$_SESSION['id']=$row2['userId'];
												header('Location:../user/student/index.php');
												exit;
												}
									
											else if( $row2['level'] == 'Organizer' ) {
												$_SESSION['id']=$row2['userId'];
												header('Location:../user/organizer/index.php');
												exit;
												}
									
											else{ ?>
          <div class="alert alert-danger">Access Denied</div>
          <?php
												}}}
												?>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
