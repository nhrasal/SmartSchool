<?php

$id=$_GET['aid'];
include("../../database/config.php");

$sql="DELETE FROM admininfo WHERE admininfo.ad_id ='" . $id . "'";
$query=mysqli_query($myconn,$sql);

header("location:../alladmin.php");


?>