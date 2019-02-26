<?php
include("../database/config.php");
$stdid=$_GET['std_id'];
$sql="SELECT COUNT(std_id) AS course
FROM midresult WHERE std_id='$stdid';";
$query=mysqli_query($myconn,$sql);
if (mysqli_num_rows($query) > 0) {

 while($row = mysqli_fetch_assoc($query)) 
	
	$x=$row["course"];
{
	}	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?>