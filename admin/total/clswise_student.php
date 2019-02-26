<?php
include("../database/config.php");
$x=$row['cls_id'];		

$sql="SELECT COUNT('$x') AS total
FROM admissionform WHERE (action='deactive' OR action='active'  )WHERE cls_id='$x'" ;
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