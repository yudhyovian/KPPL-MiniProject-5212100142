<html>
<head>
 <title>Halaman Login|Explore Surabaya</title>
    
<style>
.container {
	width: 50%;
    margin: 0 auto;
}
 
h2{
 background-color: #53bd84;
 padding: 30px 35px;
 margin: -10px -50px;
 text-align:center;
 color: #fff;
}
 
span{
 display: block;
 margin-bottom: 20px;
 color: red;
}
 
.success{
 display: block;
 margin-top: 20px;
 margin-bottom: 0;
 font-size: 14px;
} 
 
b{
 color:green;
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
 color: #53bd84;
 font-size: 16px;
}
input[type=password]{
 width: 96%;
 height: 25px;
 padding: 5px;
 margin-bottom: 25px;
 margin-top: 5px;
 border: 2px solid #ccc;
 color: #53bd84;
 font-size: 16px;
}

  label{
 color: #53bd84;
 text-shadow: 0 1px 0 #fff;
 font-size: 14px;
 font-weight: bold;
}
 
input[type=submit]{
 font-size: 16px;
 background: linear-gradient(#53bd84 5%, #fff 100%);
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
		<form name="logform" method="post" action="dbcon.php">
		<h2>Selamat Datang di Halaman Masuk Explore Surabaya</h2>
		<h2>Silahkan Masukkan Username dan Password</h2><br>
<label>Username:</label><br>
 <input type="text"	name="UserName" id="UserName">
<br>
<label>Password:</label><br>
<input type="password" name="PassWord" id="PassWord">
<br>
<input name="Login" type="submit" value="Login">
</form>
</body>
</html>