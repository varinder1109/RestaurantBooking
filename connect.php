<?php 

//uncomment this below line when on production (when u are going to demonstrate)
error_reporting(0);
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "abc_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
	echo '<script>alert("Connection Error");</script>';
   die("Connection failed: " . mysqli_connect_error());
   exit(0);
}

?>