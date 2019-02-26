<?php


include("../database/config.php");


$sql = "SELECT * FROM admissionform WHERE class='".$_POST["class"]."' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$stdid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$class=$row['class'];
$conta=$row['monumber'];
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>






