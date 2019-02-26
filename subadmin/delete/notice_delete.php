<?php

$id=$_GET['nid'];
include("../../database/config.php");

$sql="DELETE FROM notice WHERE notice.notice_id ='" . $id . "'";
$query=mysqli_query($myconn,$sql);

header("location:../vnotice.php");


?>