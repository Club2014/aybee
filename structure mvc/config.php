<?php

// on local



/*$hostname = "localhost"; 
$username = "root";
$password = "";


$database = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");


$selected = mysql_select_db("savemysmartphone2",$database) or die("Could not select Database");*/



// on server

$hostname = "localhost"; 
$username = "root";
$password = "newpwd";


$database = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");

$selected = mysql_select_db("sms",$database) or die("Could not select Database");



?>




