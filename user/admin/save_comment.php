<?php 
include('dbcon.php');
include('session.php');
include('header.php');
if(isset($_POST['submit'])){
			$createdBy=$_POST['createdBy'];
			$userId=$_POST['userId'];
			$comment=$_POST['comment'];
			$commentTime=date("Y/m/d H:i A ");
			
			$sql = mysql_query("insert into comment(createdBy, userId, comment, commentTime ) 
								values('$createdBy', '$userId', '$comment', '$commentTime')
							   ");
			
	if($sql)
	{
		header("location:details_organizer.php?createdBy=$createdBy");
	}
	
	
}

?>
