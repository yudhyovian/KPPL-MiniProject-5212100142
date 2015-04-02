<?php
include('dbcon.php');

session_start();
ob_start();

$Username=$_POST['UserName'];
$Password=$_POST['PassWord'];
$sql="SELECT Username,Password FROM user WHERE Username  = '$Username' AND Password = '$Password'";
$result = mysql_query($sql);
$check=mysql_num_rows($result);

if($check==1){
	$_SESSION['Username']=$Username;
header("location:headloginadmin.php");
}
else 
echo "Wrong Username or Password";
ob_end_flush();
?>