
<?php
$tid=$_POST['tchr_id'];
$fname=$_POST['tname'];
$mobile=$_POST['mnumber'];
$uname=$_POST['uname'];
$pass=base64_encode($_POST['password']);
$action=$_POST['action'];


include_once("../../database/config.php");
$sql="UPDATE teacherinfo SET tname='$fname' , uname='$uname', mnumber='$mobile',action='$action',password='$pass' WHERE tchr_id='$tid' ";
$query = mysqli_query($myconn, $sql);

header("location:../allteacher.php?tid=$tid;")

?>
