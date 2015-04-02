<html>
<head>
<style>
	

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
}
p.test1 {
    width: 540px; 
    border: 1px solid #000000;
    word-break: keep-all;
	margin-top: 20px;
	margin-bottom: 20px;
	margin-left:50px;
	margin-right:100px;
}
div.test2 {
    width: 320px; 
    border: 1px solid #000000;
    word-break: keep-all;
	margin-top: 20px;
	margin-bottom: 20px;
	margin-left:50px;
	margin-right:100px;
	float: right;
	}

a.one:link {color:#ff0000;}
a.one:visited {color:#0000ff;}
a.one:hover {color:#ffcc00;}

.sidabar_title {
	
	font-weight: bold;
	padding: 15px;
	margin-bottom: 	10px;
}

.sidebar_content {
	border:1px solid #000000;
	height: 300px;
	overflow-y: auto;
	overflow-x: hidden;
}

</style>
</head>
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
</html>