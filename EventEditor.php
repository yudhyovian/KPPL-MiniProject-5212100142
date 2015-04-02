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
$EventText = @$_POST['EventText'];
$status = @$_POST['Status'];
$EventTitle = @$_POST['EventTitle'];
$EventPost = @$_POST['EventPost'];
if($EventPost){
	if($EventText==true){ 
		
	if(strlen($EventText)<300){
		$EditEvent= mysql_query("UPDATE events
									  SET EventDesc=('$EventText'),Status=('$status')
									  WHERE EventTitle=('$EventTitle')")
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
EventTitle:<br> <textarea name='EventTitle' id='EventTitle'></textarea><br />
Update Event:<br> <textarea name='EventText' id='EventText'></textarea><br />
Status:<br> <textarea name='Status' id='Status'></textarea><br />
Submit: <input name="EventPost" type="submit"><br>
</form>
</body>
</html>