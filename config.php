<?
//file config.php
	//$host = "103.13.30.137";
	$host = "localhost";
	$user = "root";
	$pass = "root";
	// $user = "root";
	// $pass = "root";
	$dbname = "dn-front";

	$conndb = mysql_connect($host,$user,$pass) or die ("Error");
	mysql_select_db($dbname,$conndb);

	mysql_query("SET NAME UTF8");


	

?>