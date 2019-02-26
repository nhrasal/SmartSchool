<?php
include("../database/config.php");
$sql=" SELECT * FROM photo";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query))
{

$picname=$row['picname'];	
$picpath=$row['img_path'];	
	
$pdesc=$row['pdesc'];	

echo'<div id="picname" style="float:right;  width:100px; height:100px;  align="center"; padding:5px;>
'.$picname.'<br><a href="viewditels.php? product_id='.$picname.'">
<img src="../admin/'.$picpath.'"  width="80%" height="80%" "padding:5px" > </a> '.$pdesc.'<br></div>';
	
}

?>

