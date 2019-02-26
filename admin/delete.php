
<?php 
include("../database/config.php");
$x=$_GET['std_id'];
$sql="DELETE FROM admissionform WHERE std_id='$x' ";
$query=mysqli_query($myconn,$sql);
header("location:allstudent.php");

?>