<html>
<head>
<?php
include('dbcon.php');
$NewsText = @$_POST['NewsText'];
$NewsPost = @$_POST['NewsPost'];
if($NewsPost){
	if($NewsText==true){ 
		
	if(strlen($NewsText)<701){
		$updatenews= mysql_query("INSERT INTO news VALUES ('','$NewsText')")
		or die ("Something goes wrong");
	}else echo "post too long";
	}else echo "please insert any text";
};

?>
</head>
<body>
<form method="post">
Update Post:<br> <textarea name='NewsText' id='NewsText'></textarea><br />
Post: <input name="NewsPost" type="submit"><br>
</form>
</body>
</html>