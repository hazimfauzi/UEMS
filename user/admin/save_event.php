<?php 
include('dbcon.php');
include('session.php');

if(isset($_POST['submit'])){
	if(($_FILES['eventBanner']['type'] = 'image/gif') || ($_FILES['eventBanner']['type'] = 'image/jpeg') || ($_FILES['eventBanner']['type'] = 'image/pjpeg') && ($_FILES['eventBanner']['size'] < 2000000))
	{
		if ($_FILES['eventBanner']['error'] > 0)
		{
			echo "return code: " .$_FILES['eventBanner']['error'];
		}
		else if (file_exists('../../upload/'.$_FILES['eventBanner']['name']))
		{
			echo $_FILES['eventBanner']['name']."Already exist";
		}
		else if (move_uploaded_file($_FILES['eventBanner']['tmp_name'],'../../upload/'.$_FILES['eventBanner']['name']))
		{
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
			$sql = mysql_query("insert into event(eventTitle, eventCategory, eventLocation, startTime, endTime, startDate, endDate, maxParticipant, eventBanner, eventDescription, eventStatus, createdBy) 
								values('$eventTitle', '$eventCategory', '$eventLocation', '$startTime', '$endTime', '$startDate', '$endDate','$maxParticipant','$part', '$eventDescription', 'Pending','$session_id')
							   ");
	if($sql)
	{
		header('location:view_my_event.php');
	}
	}
	}
}

?>
