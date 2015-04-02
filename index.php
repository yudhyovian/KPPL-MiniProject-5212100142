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
    width: 308px;
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
  <li><a class="head" href="reg.php">Daftar</a></li>
  <li><a class="head" href="LogIn.php">Log In</a></li>
  <li><a class="head" href="LogIn.php">Contact</a></li>
  <li><a class="head" href="LogIn.php">Tempat Wisata</a></li>
  <li><a class="head" href="index.php">Home</a></li>
  <li><a class="head" href="index.php"><img src="headlogo.png" width="308px" height="25px"></a></li>
 
  

</ul>
<div class ="container1">

<table width="100%">
	<tr>
	<td width="70%" valign="top"> 
	<div class="sidabar_title">Most Viewed	</div>
<?php
include('dbcon.php');
$tampil=mysql_query("SELECT * FROM news WHERE status='Most View'");
while($row= mysql_fetch_array($tampil)){
	?>
	<p class="test1"><a class="one" href="LogIn.php" target="_blank"><?php echo $row['Title'];?></a><br>
<?php echo $row['NewsDesc'];?>
</p>
	<?php
}
?>
</td>
<td width="20%">
</td>

	<td width="8%"> 
	<form>
	<br><label>Search</label> <input type="text"	name="UserName" id="UserName">
	</form>

<div class="sidabar_title">Lastest Event</div>
<div class="sidebar_content">
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
	<p> Coba </p>
</div>

</td>	
</table>
</div>


 
</body>
</html>