<?php
include("../database/config.php");
$stdid=$_GET['std_id'];
$sql="SELECT SUM(finalexam) AS total
FROM finalresult WHERE std_id='$stdid'";
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