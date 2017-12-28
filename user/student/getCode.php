<?php
	require_once('phpqrcode/qrlib.php');
	
	
	$string="abcdefghijklmnopqrstuvwxyz0123456789";
	$qrName=substr(str_shuffle($string),0,12);
	
	
	QRcode::png("http://uems.tk/register.php?timo=$userId&busuk=$eventId", "/var/www/html/QRCODE/$eventId$userId.png");
	
	//$qr = new QrCode();
	
	//$qr 
		//->setText("http://uems.tk/register.php?timo=$userId&busuk=$eventId")
		//->setSize("200")
		//->setImageType(QrCode::IMAGE_TYPE_PNG)
		//->save("../../QRCODE/$eventId$userId.png");
		
?>