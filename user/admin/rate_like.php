<?php
include('dbcon.php');
include('session.php');

$createdBy=$_GET['createdBy'];

mysql_query("insert into rate(createdBy,userId,rate) values('$createdBy','$session_id','Like')") or die(mysql_error());

header("location:details_organizer.php?createdBy=$createdBy");
?>