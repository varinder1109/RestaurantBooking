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
$email = $_POST['Email'];
$phonenumber = $_POST['PhoneNumber'];
$username = $_POST['UserName'];
$password = $_POST['Password'];

$s = " select * from users where email = '$email'" ;

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num == 1){
echo " Email Already Used";
}
else{
echo $reg= "insert into users(name,email,phone_number,user_name,password) VALUES ('$name','$email','$phonenumber','$username','$password')";
mysqli_query($con, $reg);
echo '<script>alert("You have been successfully registered!");window.location.href="./login.php"</script>';
}


?>