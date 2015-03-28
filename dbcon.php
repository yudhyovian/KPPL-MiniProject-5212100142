<?php
$mysql_hostname = "127.0.0.1";
$mysql_username = "root";
$mysql_password = "admin123";
$mysql_database = "kppl_project";

$dbcon = mysql_connect ($mysql_hostname, $mysql_username, $mysql_password)
or die("Can't connect to the database");


mysql_select_db($mysql_database, $dbcon) 
or die("Error:Database not Found!!");



?>


	