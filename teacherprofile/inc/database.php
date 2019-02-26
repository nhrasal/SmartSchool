

<?php


include("login/session.php");
include("../database/config.php");


$tid=$_GET['tchr_id'];



$sql = "SELECT * FROM teacherinfo WHERE tchr_id='$tid' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['tchr_id'];

$image=$row['img_path'];
$name=$row['tname'];
$class1=$row['class1'];
$class2=$row['class2'];
$conta=$row['mnumber'];
$email=$row['email'];

	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>