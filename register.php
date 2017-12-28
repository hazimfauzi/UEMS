<?php 
include('dbcon.php');

$userId=$_GET['timo'];
$eventId=$_GET['busuk'];

	
			
$sql = mysql_query("
					UPDATE report
					SET attendanceStatus='attend'
					WHERE userId='$userId' AND eventId ='$eventId';
					");
	if($sql)
	{
		echo 'Done';
	}else{
		echo "invalid QR code";
	}
	
	


?>
