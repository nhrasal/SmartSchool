<?php


include("../database/config.php");

$tid=$_GET['tchr_id'];

$sql = "SELECT * FROM courseinfo WHERE cls_id='".$_POST["cls_id"]."' AND tchr_id='$tid'  ";

$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
$crsname=$row['coursename'];
$clsid=$row['cls_id'];

  
    }	
    } else {
        echo "0 results";
    }


    mysqli_close($myconn);

?>