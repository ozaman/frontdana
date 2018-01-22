<?
//file config.php
	//$host = "103.13.30.137";
	//file config.php
	//$host = "203.151.24.2";
	$host = "localhost";
	$user = "luaeuqpl_admin";
	$pass = "danatourasia";
	// $user = "root";
	// $pass = "root";
	$dbname = "luaeuqpl_db";

	$conndb = mysql_connect($host,$user,$pass) or die ("Error");
	mysql_select_db($dbname,$conndb);

	mysql_query("SET NAME UTF8");


	

?>