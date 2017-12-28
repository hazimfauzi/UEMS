<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$matric_no=$_POST['matric_no'];
$name=$_POST['name'];
$ic_number=$_POST['ic_number'];
$password=$_POST['password'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$yearLevel=$_POST['yearLevel'];




$encryptPass = password_hash($password, PASSWORD_DEFAULT);								
mysql_query("insert into user(userId,name,icNum,password,email,gender,address,phoneNum,yearLevel,level) values('$matric_no','$name','$ic_number','$encryptPass','$email','$gender','$address','$contact','$yearLevel','Student')")or die(mysql_error());
 
 
header('location:view_student.php');
}
?>	