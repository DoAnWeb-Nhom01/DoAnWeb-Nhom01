<?php
//this file is part of PHP LOGIN(Any Database)
//Copyright (C)2010 Shashwat Srivastava ( darklrd@gmail.com )
//				 	Apeksha Singh (apeksha0701@gmail.com)
//Powered by www.bOtskOOl.com
//
//This program is free software; you can redistribute it and/or
//modify it under the terms of the GNU General Public License
//as published by the Free Software Foundation; either
//version 2 of the License, or (at your option) any later version.
//
//This program is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.
//
//You should have received a copy of the GNU General Public License
//along with this program; if not, see <http://www.gnu.org/licenses/>.
session_start()
?>

<html>
<head>
<title>
Register
</title>
<link rel="stylesheet" href="css/general.css" type="text/css" media="screen" /> 
<script type="text/javascript" src="js/validation.js"></script>
</head>

<body>

<div id="container"> 
	<h1>Registration process</h1> 
	<form name="form2" id="customForm" onsubmit="return validate_all()" action="chek1.php" method="post">

		<div>
			<label for="username">Username</label>
			<input type="text" id="username" name="username" onkeyup="search(this.value);" />
			<span id="nameInfo"></span>
		</div>
		<div>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" onKeyUp="search1(this.value);" />   
			<span>Password Strength: </span><span id="result"></span>
		</div>
		<div>
			<label for="conf_pwd">Confirm Password</label>
			<input type="password" name="conf_pwd" id="conf_pwd" onKeyUp="check_password_success();" onBlur="check_password_failure();" />   
			<span>Result </span><span id="match"></span>
		</div>
		<div>
			<label for="email">Email</label>
			<input type="text" id="email" name="email" onBlur="validate_email();"/>
			<span id="emailInfo"></span>
		</div>
		<div>
			<label for="vercode">Enter Code</label>
			<img src="captcha.php" />
			<input type="text" name="vercode" id="vercode" onBlur="chek_failure(this.value)"; onkeyup="chek(this.value);" />
			<span>Image Result: </span><span id="txtvercode"></span>
		</div>
		<div>
			<input id="submit" type="submit" name="submit" value="register"   />
		</div>
	
	</form>
</div>
<?php
/*
include "login.class";
$login=new login;
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$login->register($username,$password);
//$login->verify1($username,$password);
} 
*/
?>
</body>
</html>