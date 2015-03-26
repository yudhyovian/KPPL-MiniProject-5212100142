<html>
<head>
<form name="outform" method"post" action = "logout.php">
You Are Logged in
<?php
session_start();
echo$_SESSION['headname'];
?>
<br>
Welcome!!!
</head>
<body>
<input type="submit" name="logout" value="logout">
</body>
</html>