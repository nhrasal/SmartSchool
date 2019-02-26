<?php
include("../database/config.php");

$sql="SELECT COUNT(tchr_id) AS total
FROM teacherinfo;";
$query=mysqli_query($myconn,$sql);
if (mysqli_num_rows($query) > 0) {

 while($row = mysqli_fetch_assoc($query)) 
	
	echo $row["total"];
{
	}	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?>