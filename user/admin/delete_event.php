<?php
include('dbcon.php');

$id=$_GET['id'];

mysql_query("delete from event where eventId='$id'") or die(mysql_error());

header('location:view_my_event.php');
?>