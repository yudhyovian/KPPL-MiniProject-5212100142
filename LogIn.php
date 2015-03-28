<html>
<head>
 <title>Halaman Login|Explore Surabaya</title>
    
<style>
.container {
	width: 50%;
    margin: 0 auto;
}
 
h2{
 
 background: linear-gradient(#0066ff 10%, #fff 100%);
 padding: 30px 50px;
 margin: -10px -50px;
 text-align:center;
 color: #191959;
}
 
span{
 display: block;
 margin-bottom: 20px;
 color: red;
}
 
 
b{
 color:#47D147	;
}
 
hr{
 margin: 10px -50px;
 border: 0;
 border-top: 1px solid #ccc;
 margin-bottom: 25px;
}
 
div.main{
 width: 306px;
 padding: 10px 50px 30px;
 border: 2px solid gray;
 font-family: raleway;
 float:left;
 margin-top:15px;
}
 
input[type=text]{
 width: 96%;
 height: 25px;
 padding: 5px;
 margin-bottom: 25px;
 margin-top: 5px;
 border: 2px solid #ccc;
 color: #191959;
 font-size: 16px;
}
input[type=password]{
 width: 96%;
 height: 25px;
 padding: 5px;
 margin-bottom: 25px;
 margin-top: 5px;
 border: 2px solid #ccc;
 color: #191959;
 font-size: 16px;
}

  label{
 color: #191959;
 text-shadow: 0 1px 0 #fff;
 font-size: 14px;
 font-weight: bold;
}
 
input[type=submit]{
 font-size: 16px;
 background: linear-gradient(#fff 0%, #0066ff 80%);
 color: #4E4D4B;
 font-weight: bold;
 cursor: pointer;
 width: 100%;
 padding: 10px 0;
 outline:none;
}
</style>
</head>	
<body>


<div class="container">
		<div class="main">
	<form name="logform" method="post" action="logpros.php">
		<h2>Selamat Datang di Halaman Masuk Explore Surabaya<br>
		<br>Silahkan Masukkan Username dan Password</h2><br>
		<label>Username:</label><br>
			<input type="text"	name="UserName" id="UserName">
<br>
		<label>Password:</label><br>
			<input type="password" name="PassWord" id="PassWord">
<br>
			<input name="Login" type="submit" value="Login">
	</form>
	<form name="regbutton" method="post" action="reg.php">
			<input name="Register" type="submit" value="Register" action="reg.php">
</form>
</body>
</html>