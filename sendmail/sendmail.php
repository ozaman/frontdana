<? ob_start(); ?>
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

$to = "info@danatoursasia.com, sales@danatoursasia.com,danatoursasia@gmail.com,ozaclever@gmail.com";
$subject = "Dana Tours and Travel";

$message2 .= '<p>';
$message2 .= '<br /><b>Contact Form Was Used ...</b> ';
$message2 .= '<br />';
$message2 .= '<br /><b>****************************************</b>';
$message2 .= '<br />';
$message2 .= '<br /><b>Subject :</b> '. $_POST["subject"];
$message2 .= '<br /><b>Contact Person :</b> '. $_POST["name"];
$message2 .= '<br /><b>Email Address :</b> '. $_POST["email"];
$message2 .= '<br /><b>Telephone Number :</b> '. $_POST["phone"];
$message2 .= '<br /><b>Message :</b> '. $_POST["message"];
$message2 .= '<br />';
$message2 .= '<br /><b>****************************************</b>';
$message2 .= '</p>';

$mail = new Mail($to, $subject, "", "Dana_Tours_Asia@danatoursasia.com");
$mail->resetHeaders();
$mail->setHtml($message2);
$mail->setPriority(ABSTRACTMAIL_NORMAL_PRIORITY);
//$mail->addCC("danatoursasia@gmail.com");
$mail->addBCC("mrphie@gmail.com");



if( isset( $_POST["email"] ) and ( $_POST["emailaddress"] == "ozaclever@gmail.com" ) ){
	$mail2 = new Mail("ozaclever@gmail.com", $subject, "Dana_Tours_Asia", "Dana_Tours_Asia@danatoursasia.com");
	$mail2->resetHeaders();
	$mail2->setHtml($message2);
	$mail2->setPriority(ABSTRACTMAIL_NORMAL_PRIORITY);
	$sended = $mail2->send();
}else{
	if(checkDomain($domain)){
		$sended = $mail->send();
		//$sended = true;
		echo 1;
	}else{
		echo 0;
		//$sended = false;
	}
}
?>
