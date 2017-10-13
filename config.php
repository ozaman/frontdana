<?
//file config.php
	//$host = "103.13.30.137";
	$host = "localhost";
	$user = "imronspe_web";
	$pass = "imronspeedboat";
	// $user = "root";
	// $pass = "root";
	$dbname = "imronspe_web";

	$conndb = mysql_connect($host,$user,$pass) or die ("Error");
	mysql_select_db($dbname,$conndb);

	mysql_query("SET NAME UTF8");


	

?>