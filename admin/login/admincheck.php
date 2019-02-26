<?php
session_start();
$username=$_POST['name'];
$password=$_POST['pass'];
$admin="admin";
$adminpassword="admin";
if (($username != $admin) || ($password != $adminpassword)) 
{
		$_SESSION['error']['uname']="Username or Password Wrong";
		  header("location:../adminlogin.php");
	} 
	else {
		
		$_SESSION['name'] = $username;
         
		header("location:../index.php ?admin= $username");
		
	}

?>
