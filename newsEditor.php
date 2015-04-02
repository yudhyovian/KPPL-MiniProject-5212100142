<html>
<head><style>
	

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: 
	hidden;
}

li {
    float: right;
}

a.head:link, a.head:visited {
    display: block;
    width: 225px;
	height: 25px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #98bf21;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

a.head:hover, a.head:active {
    background-color: #7A991A;
}</style>
<?php
include('dbcon.php');
$NewsText = @$_POST['NewsText'];
$status = @$_POST['Status'];
$NewsTitle = @$_POST['PostTitle'];
$NewsPost = @$_POST['NewsPost'];
if($NewsPost){
	if($NewsText==true){ 
		
	if(strlen($NewsText)<701){
		$Editnews= mysql_query("UPDATE news 
									  SET NewsDesc=('$NewsText'),Status=('$status')
									  WHERE Title=('$NewsTitle')")
		or die ("Something goes wrong");
	}else echo "post too long";
	}else echo "please insert any text";
};

?>
</head>
<body>
<body>
<ul>
  <li><a class="head" href="profileadmin.php">
<?php
session_start();
echo $_SESSION['Username'];
?>
</a></li>
  <li><a class="head" href="logoutadm.php">Logout</a></li>
  <li><a class="head" href="newsUpdater.php">create Post</a></li>
<li><a class="head" href="newsEditor.php">Edit Post</a></li>
<li><a class="head" href="EventUpdater.php">create Event</a></li>
<li><a class="head" href="EventEditor.php">Edit Event</a></li>
  <li><a class="head" href="headlogin.php">Home</a></li>
  <li><a class="head" href="headlogin.php"><img src="headlogo.png" width="308px" height="25px"></a></li>
 
  



 
</body>
<form method="post">
PostTitle:<br> <textarea name='PostTitle' id='PostTitle'></textarea><br />
Update Post:<br> <textarea name='NewsText' id='NewsText'></textarea><br />
Status:<br> <textarea name='Status' id='Status'></textarea><br />
Post: <input name="NewsPost" type="submit"><br>
</form>
</body>
</html>