<?php
include("../database/config.php");

$sql="SELECT COUNT(std_id) AS total
FROM admissionform WHERE (action='deactive' OR action='active' ) AND cls_id='".$_POST["cls_id"]."'  " ;
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