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
session_start();
include "login.class";
$login=new login;
if(isset($_POST['submit'])&&(isset($_SESSION['destination'])))
{

$login->verify1($_POST['username'],$_POST['password'],$_POST['set']);
exit(0);
} 
else if(isset($_POST['submit'])&&(!isset($_SESSION['destination'])))
{
$_SESSION['destination']="/";
$login->verify1($_POST['username'],$_POST['password'],$_POST['set']);
exit(0);
} 
else if (isset($_SESSION['username']))
{
	header("Location: /");
}
else if(isset($_COOKIE['user']))
{
$login->verify1($_COOKIE['user'],$_COOKIE['pwd'],NULL);
exit(0);
}
?>


<html>
<head>
<title>
Login
</title>
<link rel="stylesheet" href="css/general.css" type="text/css" media="screen" /> 
</head>

<body>
<?php

$option=$_GET['option'];
if($option!=2)
{
$option=1;
?>

	<h1>Login process</h1> 
			<form name="form1" id="customForm" action="login.php" method="post">
			
			
			<div>
			<label for="username">Username</label>
			<input type="textbox" name="username" id="username"/>
			</div>
			
			<div>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" />
            </div>
			
			<div>
			<a href="login.php?option=2">Forgot Password</a>
			</div>
			
		
			
			
            <div>     
			<input type="submit" id="submit" name="submit" value="submit"/>&nbsp&nbsp
			<input type="reset" id="reset" name="reset" value="reset"/>
			</div>


<input type="checkbox" name="set" value="rem_me" /> Remember Me
</form>
<?php
}
?>
<?php
if($option==2)
{
?>
<div id="container"> 
			<h1>Forgot Password</h1> 
			<form name="form2" id="customForm" action="forgot.php" method="post">
			
			<div>
			<label for="email">Enter Your Email Id</label>
			<input type="textbox" name="email" id="email"/>
			</div>
			
			<div>     
			<input type="submit" id="submit" name="submit" value="submit"/>
			</div>
			</form>
</div>
<?php
}
?>

</body>
</html>