<?php

$id=$_GET['std_id'];
include("../../database/config.php");

$sql="DELETE FROM admissionform WHERE admissionform.std_id ='" . $id . "'";
$query=mysqli_query($myconn,$sql);

header("location:../allstudent.php");


?>