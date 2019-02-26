<?php
include("../database/config.php");

$sql=" SELECT * FROM admissionform";
$query=mysqli_query($myconn,$sql);

if (mysqli_num_rows($query) > 0) {
	
	echo'<center><td ><p style="font-size:30px"><b>All Students</b></p> </td></center>';
echo'<center><div id="table" ><table border="" width="80%" > <tr>
<th width="8%" >Student_Id</th>
<th width="15%" >Student Photo</th>
<th width="15%" >Student Name</th>
<th width="15%" >Class</th>
<th width="15%" >Student Contact</th>

<th width="12%" >Edit</th>
<th width="12%" >Delete</th>


</tr>
</table></center>';
 while($row = mysqli_fetch_assoc($query)) 
	
	
{
	$pid=$row['std_id'];

$image=$row['img_path'];
$sname=$row['firstname'];
$class=$row['class'];
$conta=$row['monumber'];

echo'<center><table border="" width="80%" >
<tr>
<th width="8%">'.$pid.'</th>

<th width="15%"><img src="../image/'.$image.'"  width="50px" height="50px" position="absolute"/></th>
<th width="15%">'.$sname.'</th>
<th width="15%">'.$class.'</th>
<th width="15%">'.$conta.'</th>
<td width="8%" ><form method="post" action="edit.php" onclick="edit();">

<a href="editstdinfo.php?pid='.$pid.'" ><p style="color:green;">Edit</p></a></td>


<td width="8%" ><form method="post" action="sdeletenow.php" onclick="delete();">
<a href="delete/sdeletenow.php?pid='.$pid.'" ><p style="color:red;">Delete</p></a></td>
</tr>
</table></center></form>';
   }	
} else {
    echo "0 results";
}


?>

