<?php
include("database/config.php");
$sql=" SELECT * FROM photo";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query))
{

$picname=$row['picname'];	
$picpath=$row['img_path'];	
	
$pdesc=$row['pdesc'];	

echo'<div id="picname" style="float:right; width:20%; height:20%; padding:5px; text-align="center">
'.$picname.'<br><a href="viewditels.php? pic_name='.$picname.'">
<img src=".../../admin/'.$picpath.'"  width="200px" height="200px" style=" border-radius: 400px"> </a> '.$pdesc.'<br></div>';
	
}

?>

