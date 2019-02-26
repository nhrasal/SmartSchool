<?php
include("../database/config.php");
$tid=$_GET['tchr_id'];
$sql="SELECT COUNT(cls_id) AS total
FROM courseinfo   WHERE tchr_id='$tid' ;";
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