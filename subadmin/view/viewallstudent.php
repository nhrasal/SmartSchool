<?php
include("../database/config.php");


$sql = "SELECT * FROM admissionform";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	
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

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$stdid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$class=$row['class'];
$conta=$row['monumber'];
	echo'<form method="post" action="delete.php" onclick="delete();"><center><div id="table"><table border="" width="80%" >
<tr>
<th width="8%">'.$stdid.'</th>

<th width="15%"><img src="../image/'.$image.'"  width="50px" height="50px" position="absolute"/></th>
<th width="15%">'.$name.'</th>
<th width="15%">'.$class.'</th>
<th width="15%">'.$conta.'</th>
<th width="12%" >
<input type="submit" name="" Value="Edit">
</th>
<th width="12%" >

<a href="delete/stddelete.php?std_id='.$stdid.'" ><input type="submit" name="" Value="Delete"></a>
</form>
</th></tr></table></div></center>
';
	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?>






