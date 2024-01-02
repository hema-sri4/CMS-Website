<?php 
$host="localhost";
$username="root";
$password="";
$dbname="college";
$link = mysqli_connect($host, $username, $password)

        or die("Could not connect");

$db = mysqli_select_db($link, $dbname)
		or die("Could not select database");
?>