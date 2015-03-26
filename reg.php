<html>
<head>
<?php
include('dbcon.php');
$FirstName = @$_POST['FirstName'];
$LastName = @$_POST['LastName'];
$Username = @$_POST['Username'];
$password = @$_POST['password'];
$reenterpassword = @$_POST['reenterpassword'];
$SignUp =@$_POST['register'];
$encryptPassword = md5($password);
if($SignUp){
	if($FirstName==true){
	if($LastName==true){
	if($Username==true){
	if($password==true){
	if($reenterpassword==$password){
		if(strlen($Username)<31||strlen($FirstName)<31||strlen($LastName)<31){
			if(strlen($password)>12||strlen($password)<50){
				$daftar= mysql_query("INSERT INTO userdata VALUES ('','$FirstName','$LastName','$Username','$password','$encryptPassword')")
				or die ("Something goes wrong");
			}else echo "Your Password shouldn't be exceed 50 character or at least 12 character";
		}else echo "maximum character of Name and Username is 50 Character";
	}else
		echo "Your Password is not the same";
	}else
		echo "Please Input Your";
	}else
		echo "Please Input Username";
	}else
		echo "Please Input Your Name";
	}else
		echo "Please Input Your Name"; 
};

?>
</head>
<body>
<form method="post">
FirstName: <input name="FirstName" type="text">
LastName: <input name="LastName" type="text"><br><br>
Username: <input name="Username" type="text"><br><br>
Password: <input name="password" type="password">
Re-EnterPassword: <input name="reenterpassword" type="password"><br><br>
SignUp: <input name="register" type="submit"><br>
</form>
</body>
</html>