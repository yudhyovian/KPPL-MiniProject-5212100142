<?php
$mysql_hostname = "127.0.0.1";
$mysql_username = "root";
$mysql_password = "admin123";
$mysql_database = "kppl_project";

$dbcon = mysql_connect ($mysql_hostname, $mysql_username, $mysql_password)
or die("Can't connect to the database");
echo "Connection Succesfull<br>";

mysql_select_db($mysql_database, $dbcon) 
or die("Error:Database not Found!!");
echo "Connection Complete";

session_start();
ob_start();

$Username=$_POST['UserName'];
$Password=md5($_POST['PassWord']);
$sql="SELECT Username,reenterpassword FROM userdata WHERE Username  = '$Username' AND reenterpassword = '$Password'";

$result = mysql_query($sql);
$check=mysql_num_rows($result);
if($check==1){
$_SESSION['headname']=mysql_query ("SELECT  FROM userdata WHERE Username = '$Username' AND reenterpassword = '$Password'");
header("location:headlogin.php");
}
else 
echo "Wrong Username or Password";
ob_end_flush();

?>


	