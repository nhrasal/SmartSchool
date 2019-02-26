<?php
include("../database/config.php");
$sql=" SELECT * FROM photo";
$query=mysqli_query($myconn,$sql);

echo'<center><table width="80%" > <tr>
<td width="15%" >name</td>
<td width="15%" > image</td>
<td width="8%" >Delete</td></tr>';

while($row=mysqli_fetch_array($query))
{

$picname=$row['picname'];
$pid=$row['pc_id'];
$picpath=$row['img_path'];	
	
$pdesc=$row['pdesc'];	

echo'<form method="post" action="../deletenow.php" onclick="delete();">
<tr>
<td width="15%">'.$picname.'</td>
<td width="15%"><img src="'.$picpath.'" width="150px"height="150px"/></td>
<td width="8%" ><a href="../deletenow.php?pid='.$pid.'" >&nbsp <p style="color:red;">Delete</p></a></td>
</tr>
</table></center></form>';

}

?>

