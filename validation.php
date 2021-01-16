<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "abc_db";
$con = mysqli_connect($servername, $username, $password,$db);
$UserName = $_POST['UserName'];
$password = $_POST['Password'];

$s = " select * from users where user_name = '$UserName' and password='$password'" ;

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num ==1){
echo '<script>alert("Logged in successfully!");window.location.href="./booking_form.php"</script>';

}
else{
echo '<script>alert("Invalid Credentials!");window.location.href="./booking.php"</script>';
}
?>