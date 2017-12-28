<?php
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$matric_no=$_POST['matric_no'];
$name=$_POST['name'];
$ic_number=$_POST['ic_number'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];




								
mysql_query
("
update user
 
set userId='$matric_no',
	name='$name',
	icNum='$ic_number',
	gender='$gender',
	address='$address',
	phoneNum='$contact' 
where userId='$id'

");
 
 
header('location:view_admin.php');
}
?>	
 
