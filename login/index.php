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

require "checklogin.php";


{
$user=$_SESSION['username'];
$pass=$_SESSION['password'];
echo "welcome";
echo "<br/>";
echo $user;
}
?>
<form name="form">
<table width="" cellspacing="5" cellpadding="2">
<tr>
<td width="300"></td>
<td width="50"></td>
<td width="50"></td>
<td width="100"><a href="logout.php">LOGOUT</a></td>
</tr>

<tr>
<td width="300"></td>
<td width="50"></td>
<td width="50"></td>
<td width="300"><a href="change.php">CHANGE PASSWORD</a></td>
</tr>
</table>
</form>
