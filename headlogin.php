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
    float: left;
}

a:link, a:visited {
    display: block;
    width: 350px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #98bf21;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color: #7A991A;
}
</style>
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">Tempat Wisata</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="profile.php">
<?php
session_start();
echo $_SESSION['Username'];
?>
</a></li>
</ul>


</head>
<body>
</body>
</html>