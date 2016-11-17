<!DOCTYPE html>
<html>
<head>
	<title>Completed Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
<p>Registration completed.<br> You can login now</p>
	<a href="login.php" id="btn">Login</a>
<p></p></div>
</body>
</html>
<?php
$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass'];

$dbconn=mysqli_connect("localhost","root","","login");

$query="insert into users values ('$email','$username','$password')";

$result = mysqli_query($dbconn,$query);
?>
