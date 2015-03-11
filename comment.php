<html>
<head>
<?php
include('dbcon.php');
$commentText = @$_POST['commentText'];
$Posting = @$_POST['CommentPost'];
if($Posting){
	if($commentText==true){ 
		
	if(strlen($commentText)<300){
		$masukin= mysql_query("INSERT INTO commentdata VALUES ('','$commentText')")
		or die ("Something goes wrong");
	}else echo "Comment too long";

	}else echo "Please insert a comment";

	}else echo "please insert comment";

};

?>
</head>
<body>
<form method="post">
Comment:<br> <textarea name='commentText' id='commentText'></textarea><br />
Post: <input name="CommentPost" type="submit"><br>
</form>
</body>
</html>
