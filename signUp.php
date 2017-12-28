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
$year_level=$_POST['yearLevel'];

$query=mysql_query("select userId from user where userId='$matric_no'")or die(mysql_error());
$row=mysql_fetch_array($query);
	if($row['userId'] == $matric_no)
	echo 'Your User ID already exist, please contact Admin for the details.';
	else{
	
	
$encryptPass = password_hash($password, PASSWORD_DEFAULT);								
mysql_query("insert into user(userId,name,icNum,password,email,gender,address,phoneNum,yearLevel,level,status) values('$matric_no','$name','$ic_number','$encryptPass','$email','$gender','$address','$contact','$year_level','Student','Active')")or die(mysql_error());

//for send to email
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'uems4dmin@gmail.com';          // SMTP username
$mail->Password = 'hazimfauzi'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('uems4dmin@gmail.com', 'UEMS');
$mail->addReplyTo('uems4dmin@gmail.com', 'UEMS');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Welcome to UTeM Event Management System</h1>';
$bodyContent .= '
You Are now <b>successful</b> register to our system <br/><br/><b>
Name     : '.$name.'<br/>
User Id  : '.$matric_no.'<br/>
Password : '.$password.'<br/><br/></b>
Thank you,<br/>
UTeM Event Management System <br/>
http://uems.tk/<br/>
This is a Message email itself automatically. Please do not reply to this email.<br/>';


$mail->Subject = 'Succsessful Register To UEMS';
$mail->Body    = $bodyContent;
$mail->send();



header("location:index.php?k=$email");

}
	}
?>	