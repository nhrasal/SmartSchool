<?php
// Inialize session
session_start();
// In
$username=$_POST['uname'];
$pass=base64_encode($_POST['password']);


include("../database/config.php");
// Retrieve username and password from database according to user's input
$sql ="SELECT * FROM teacherinfo WHERE (uname ='$username' and password = '$pass' ";
// Check username and password match

$result=mysqli_query($myconn,$sql);
$count=mysqli_num_rows($result);

if($result== "TURE")
{

	echo "success full";
}
else
{
echo ': <font color="#FF0000"><a href="../login.php">Your login information is incorrect</a></font>';	
}

?>