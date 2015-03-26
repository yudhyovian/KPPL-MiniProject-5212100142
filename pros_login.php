<?php
session_start();
ob_start();

$Username=$_POST['UserName'];
$Password=md5($_POST['PassWord']);
$sql="SELECT Username,reenterpassword FROM userdata WHERE Username  = '$Username' AND reenterpassword = '$Password'";
$result = mysql_query($sql);
$check=mysql_num_rows($result);
if($check==1){
$_SESSION['headname']="SELECT FirstName FROM userdata WHERE Username = '$Username' AND reenterpassword = '$Password'";
header("location:heading.php");
}
else 
echo "Wrong Username or Password";
ob_end_flush();
?>