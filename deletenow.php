<?php

$id=$_GET['pid'];
include("../database/config.php");

$sql="DELETE FROM photo WHERE photo.pic_id ='" . $id . "'";
$query=mysqli_query($myconn,$sql);

header("location:admin/index.php");


?>