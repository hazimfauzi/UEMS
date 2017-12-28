<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  <a class="navbar-brand" href="index.php">UTeM Event Management System</a> </div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
  <li class ="text">
    <p><font size="2" color="white">WELCOME
      <?php 
						$query = mysql_query("select name from user where userId = '$session_id'")or die(mysql_error());
						$row=mysql_fetch_array($query);
						echo $row[0];
						?>
      </font></p>
  </li>
  <!-- /.dropdown -->
  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i>Profile <i class="fa fa-caret-down"></i> </a>
    <ul class="dropdown-menu dropdown-user">
      <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a> </li>
      <li><a href="change_password.php"><i class="fa fa-key fa-fw"></i> Change Password</a> </li>
      <li class="divider"></li>
      <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a> </li>
    </ul>
    <!-- /.dropdown-user --> 
  </li>
  <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links --> 

<!--Header_section--> 
