
<?php
$aid=$_POST['ad_id'];
$name=$_POST['aname'];
$mobile=$_POST['mnumber'];
$user=$_POST['uname'];

include_once("../../database/config.php");
$sql="UPDATE admininfo SET aname='$name' ,mnumber='$mobile' ,uname='$user' WHERE ad_id='$aid'";
$query = mysqli_query($myconn, $sql);

header("location:../alladmin.php?pid=$pid;")

?>
