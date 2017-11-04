<?php

$to  = 'oarvoodoo@gmail.com';
$subject = 'Birthday Reminders for August';

$message = 'message';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'To: Oar <oarvoodoo@gmail.com>' . "\r\n";
$headers .= 'From: DesjoyauxThailand <DesjoyauxThailand@desjoyauxthailand.com>' . "\r\n";
$headers .= 'Cc: mrphie@gmail.com' . "\r\n";

// Mail it
if( mail($to, $subject, $message, $headers) ){
	echo "Yes";
}else{
	echo "No";
}
?>
