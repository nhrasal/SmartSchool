<?php

$id=$_GET['tchr_id'];
include("../../database/config.php");

$sql="DELETE FROM teacherinfo WHERE teacherinfo.tchr_id ='" . $id . "'";
$query=mysqli_query($myconn,$sql);

header("location:../allteacher.php");


?>