
<?php
$sid=$_POST['std_id'];
$fname=$_POST['firstname'];

$mobile=$_POST['monumber'];
$uname=$_POST['uname'];
$pass=base64_encode($_POST['password']);
$action=$_POST['action'];

include_once("../../database/config.php");
$sql="UPDATE admissionform SET firstname='$fname'  ,monumber='$mobile', uname='$uname' ,password='$pass' ,action='$action' WHERE std_id='$sid'";
$query = mysqli_query($myconn, $sql);

header("location:../allstudent.php?pid=$pid;")

?>
