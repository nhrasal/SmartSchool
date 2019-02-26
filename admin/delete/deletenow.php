<?php

$id=$_GET['pid'];
include("../../database/config.php");

$sql="DELETE FROM admissionform WHERE admissionform.std_id ='" . $id . "'";
$query=mysqli_query($myconn,$sql);


?>