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
?>

<html>
<head>
<title>
Change password
</title>
<link rel="stylesheet" href="css/general.css" type="text/css" media="screen" /> 
</head>

<body>
<div id="container"> 
	<h1>Change Password</h1> 
				
				<form name="form" id="customForm" action="change.php?" method="post">
				
				<div>
			    <label for="username">Username</label>
                <input type="textbox" id="username" name="user" />
				</div>
				
				<div>
				<label for="old">Old Password</label>
				<input type="password" name="old" id="old" />
				</div>
				
				<div>
				<label for="old">New Password</label>
				<input type="password" name="new" id="new" />
				</div>
                
				<div>
				<label for="conf_pwd">Confirm New Password</label>
				<input type="password" name="cnew" id="conf_pwd" />
				</div>
                
				<div>
				<input type="submit" name="submit" value="CHANGE"/>&nbsp&nbsp
				<input type="reset" name="reset" value="RESET"/>
				</div>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
include "login.class";
$login=new login;
$user=$_POST['user'];
$old_pwd=$_POST['old'];
$new_pwd=$_POST['new'];
$cnew_pwd=$_POST['cnew'];
$login->change($user,$old_pwd,$new_pwd,$cnew_pwd);
} 
?>