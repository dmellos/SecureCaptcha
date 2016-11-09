<!DOCTYPE html>
<html>
<head>
<title> login system </title>
<link rel ="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="frm">
<form action ="process.php" method ="POST" onsubmit="return Validate()" name="valform">
<p>
<label>Username:</label> 
<input type ="text" id ="user" name="user" placeholder="eg:dmelloselwyn" />
</p>
<div id="username_error" class="val_error"></div>
<p>
<label>Password:</label> 
<input type ="password" id ="pass" name="pass"/>
</p>
<div id="password_error" class="val_error"></div>
<p>
<input type ="submit" id ="btn" value="Login"/>
</p>
<p>New Users? <a href="register.php"> Click here!</a></p>
</form>
</div>
</body>
</html>


<script type="text/javascript">
function clickme(){}
var isEighteen = window.confirm("Click Ok If Over 18");
if (isEighteen) { // if they clicked "ok"
    window.open(
      'http://example.com/popup-is18.html', 
      '_blank'
    );
} else { // if they clicked "cancel"
    window.open(
      'http://example.com/popup-not18.html', 
      '_blank'
    );
}}

	var username = document.forms["valform"]["user"];
	var password =  document.forms["valform"]["pass"];

	var username_error=document.getElementById("username_error");
	var password_error=document.getElementById("password_error");

	username.addEventListener("blur",usernameverify,true);
	password.addEventListener("blur",passwordverify,true);


	function Validate(){

		if (username.value == "")
		{
			username.style.border= "1px solid red";
			username_error.textContent ="Username is required";
			username.focus();
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
	function passwordverify(){
		if (password.value != "")
		{
			password.style.border= "1px solid #5E6E66";
			password_error.innerHTML ="";
			return true;
		}

	}

</script>