<?php
$con = mysql_connect("localhost", "root", "")or die("<a style='color:red'>Not connect to server!</a>");
$dbname = "giohang";//Khai bao ten database
$dbselected = mysql_selectdb($dbname,$con )or die("<a style='color:red'>Not connect to database !</a>");
?>

