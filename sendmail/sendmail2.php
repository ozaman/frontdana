<?php

require("conf.php");
require("classes/Mail.php");
require("classes/AttachmentMail.php");
require("classes/Multipart.php");

function checkDomain($domain){
	if($_SERVER["HTTP_REFERER"] != ""){
		$temp1 = explode("://", $_SERVER["HTTP_REFERER"]);
		if($temp1[0] == "http"){
			$temp2 = explode("/", $temp1[1]);
			$on_server = false;
			foreach ($domain as $value){
				if($temp2[0] == $value)	$on_server = true;
			}
			if($on_server){
				return $temp2[0];
			}else{
				return false;
			}
		}else{
			return false;
		}
	}else{
		return false;
	}
}

//$to = "wongkarn@hotmail.com, gwongkarn@gmail.com, info@desjoyauxthailand.com";
$to = "oarvoodoo@gmail.com";
$subject = "Desjoyaux Thailand";

$message2 .= '<p>';
$message2 .= 'Hello';
$message2 .= '</p>';

$mail = new Mail($to, $subject, "", "DesjoyauxThailand@desjoyauxthailand.com");
$mail->resetHeaders();
$mail->setHtml($message2);
$mail->setPriority(ABSTRACTMAIL_NORMAL_PRIORITY);
//$mail->addBCC("oarvoodoo@gmail.com");

$sended = $mail->send();
if( $sended ){
	echo "yes";
}else{
	echo "no";
}

exit;

if( isset( $_POST["email_address"] ) and ( $_POST["email_address"] == "oarvoodoo@gmail.com" ) ){
	$mail2 = new Mail("oarvoodoo@gmail.com", $subject, "Desjoyaux", "DesjoyauxThailand@desjoyauxthailand.com");
	$mail2->resetHeaders();
	$mail2->addHeader("Reply-To: DesjoyauxThailand@desjoyauxthailand.com");
	$mail2->setHtml($message2);
	$mail2->setPriority(ABSTRACTMAIL_NORMAL_PRIORITY);
	$sended = $mail2->send();
}else{
	if(checkDomain($domain)){
		$sended = $mail->send();
		$sended = true;
	}else{
		$sended = false;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Desjoyaux Thailand</title>
<style type="text/css">
<!--
body {
	background:#fff;
}
-->
</style>
</head>
<body>
<?
if($sended){
	/*$msg = "Thank you for visiting our website.";
	echo $msg;
	echo '<br />'.$message2;*/
	header("Location:http://www.desjoyauxthailand.com/en/thanks.html");

}else{
	header("Location:http://www.desjoyauxthailand.com/en/failed.html");
	/*$msg = "Error send again.";
	echo $msg;*/
}
?>
</body>
</html>
