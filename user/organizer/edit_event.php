<?php 
include('dbcon.php');
include('session.php');

if(isset($_POST['submit'])){
	$id=$_POST['id'];
			$eventTitle=$_POST['eventTitle'];
			$eventCategory=$_POST['eventCategory'];
			$eventLocation=$_POST['eventLocation'];
			$startTime=$_POST['startTime'];
			$endTime=$_POST['endTime'];
			$startDate=$_POST['startDate'];
			$endDate=$_POST['endDate'];
			$maxParticipant=$_POST['totalParticipant'];
			$eventDescription=$_POST['eventDescription'];
			$part = $_FILES['eventBanner']['name'];
			
			$sql = mysql_query("
						UPDATE event
						SET eventTitle='$eventTitle', eventCategory='$eventCategory', eventLocation='$eventLocation', startTime='$startTime', endTime='$endTime', startDate='$startDate', endDate='$endDate', maxParticipant='$maxParticipant', eventDescription='$eventDescription'
						WHERE eventId='$id'
							   ");
	if($sql)
	{
		header('location:view_my_event.php');
	}
	
	
}

?>
