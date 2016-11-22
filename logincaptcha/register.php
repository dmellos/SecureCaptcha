<?php
session_start();
$_SESSION = array();

include ("captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="RegisterDone.php" method="POST" onsubmit=" return ValidateReg()" name="valRegform">
	<table>
	<tr>
	<td><label>Username:</label></td>
	<td><input type="text" id="user" name="user"/></td>
	</tr>
	<tr>
	<td colspan="2"><div id="username_error" class="val_error"></div></td>
	</tr>
	
	<tr>
	<td><label>Email: </label></td>
	<td><input type="text" id="email" name="email"/></td>
	</tr>
	</tr>
	<tr>
	<td colspan="2"><div id="email_error" class="val_error"></div></td>
	</tr>
	
	<tr>
	<td><label>Password: </label></td>
	<td><input type="password" id="pass" name="pass"/></td>
	</tr>
	<tr>
	</tr>
	<tr>
	<td colspan="2"><div id="password_error" class="val_error"></div></td>
	</tr>
	<tr>
		<td>Verify:</td><td> 
		
		<?php
		
        echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';

        ?>
		
		</td>
	</tr>
	<tr><td></td>
		<td>
			<input type="text" id="captchasym" name="captchasym"/>
		</td>
	</tr>
	<td></td>
	<td align="right"><input type="submit" id="btn" value="Register"/></td>
	</tr>
	</table>
	</form>
	Existing users, to Login <a href="login.php"> Click here</a>
</div>
</body>
</html>

<script type="text/javascript">
	var username = document.forms["valRegform"]["user"];
	var email = document.forms["valRegform"]["email"];
	var password =  document.forms["valRegform"]["pass"];

	var username_error=document.getElementById("username_error");
	var email_error=document.getElementById("email_error");
	var password_error=document.getElementById("password_error")

	username.addEventListener("blur",usernameverify,true);
	email.addEventListener("blur",emailverify,true);
	password.addEventListener("blur",passwordverify,true);
	
	function ValidateReg(){

		if (username.value == "")
		{
			username.style.border= "1px solid red";
			username_error.textContent ="Username is required";
			username.focus();
			return false;
		}

			if (email.value == "")
		{
			email.style.border= "1px solid red";
			email_error.textContent ="Email is required";
			email.focus();
			return false;
		}

		if (password.value == "")
		{
			password.style.border= "1px solid red";
			password_error.textContent ="Password is required";
			password.focus();
			return false;
		}

		
	
	}


	function usernameverify(){
		if (username.value != "")
		{
			username.style.border= "1px solid #5E6E66";
			username_error.innerHTML ="";
			return true;
		}
	}
		function emailverify(){
		if (email.value != "")
		{
			email.style.border= "1px solid #5E6E66";
			email_error.innerHTML ="";
			return true;
		}
	}


	function passwordverify(){
		if (password.value != "")
		{
			password.style.border= "1px solid #5E6E66";
			password_error.innerHTML ="";
			return true;
		}

	}
</script>
