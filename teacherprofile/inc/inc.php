<?php


include("../database/config.php");


$tid=$_GET['tchr_id'];

$sql = "SELECT * FROM teacherinfo Where tchr_id='$tid' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['tchr_id'];

$image=$row['img_path'];
$fname=$row['tfname'];
$addr=$row['address'];
$eml=$row['email'];
$eq=$row['eduqf'];
$gdr=$row['gender'];
$pass=base64_decode($row['password']);

$name=$row['tname'];
$mobile=$row['mnumber'];
$user=$row['uname'];
	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>

