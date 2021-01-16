<?php
session_start();
$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo 'not connected';
}

if(!mysqli_select_db($con,'abc_db')) 
{
	echo 'database not connected';
}

$name = $_POST['Name'];
$phonenumber = $_POST['Phonenumber'];
$partysize = $_POST['Partysize'];
$day = $_POST['Day'];
$time = $_POST['Time'];


$reg= "insert into table_booking(name,phone_number,party_size,day,time) VALUES ('$name','$phonenumber','$partysize','$day','$time')";
mysqli_query($con, $reg);
echo '<script>alert("Booking is confirmed");window.location.href="./page2.php"</script>'; 

?>