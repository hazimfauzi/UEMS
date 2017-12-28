<?php
include('dbcon.php');
include('session.php');
$id=$_GET['id'];

mysql_query("update event set eventStatus='Validated', validateBy = '$session_id' where eventId='$id'") or die(mysql_error());

header('location:validate_event.php');
?>