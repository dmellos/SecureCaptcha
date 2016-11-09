<!DOCTYPE html>
<html>
<head></head>
<body>
<a href="http://localhost/loginphp/login.php">Logout</a>
<br>
<br>

<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$dbconn=mysqli_connect("localhost","root","","login");

$query="select * from users where username ='$username' and password = '$password'";

$result = mysqli_query($dbconn,$query);

$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password)
{
echo "Login success :)  !!! Welcome ".$row['username'];
}
else
{
echo "failed to login";
}
?>


</body></html>