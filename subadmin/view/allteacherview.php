<?php
include("../database/config.php");


$sql = "SELECT * FROM teacherinfo ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	
	echo'<center><td ><p style="font-size:30px"><b>All Teacher</b></p> </td></center>';
echo'<center><div id="table" ><table border="" width="80%" > <tr>
<th>Teacher Id</th>
<th width="173px">Teacher Photo</th>
<th width="170px">Teacher Name</th>
<th width="110px">Contact</th>
<th width="135px"> User Name</th>
<th width="55px">Edit</th>
<th width="75px">Delete</th>
<th width="110px">Message</th>


</tr>
</table></center>';

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['tchr_id'];

$image=$row['img_path'];
$name=$row['tname'];
$mobile=$row['mnumber'];
$user=$row['uname'];
	echo'<center><div id="table"><table border=""  width="80%" >
<tr>
<th width="">'.$tid.'</th>

<th width="173px"><img src="../admin/image/'.$image.'"  width="50px" height="50px" position="absolute"/></th>
<th width="170px">'.$name.'</th>
<th width="95px">'.$mobile.'</th>
<th width="135px">'.$user.'</th>
<th width="55px"><form method="post" action="tedit.php" onclick="edit();">

<a href="teditinfo.php?tid='.$tid.'" ><p style="color:green;">Edit</p></a></th>


<th width="75px"><form method="post" action="tdeletenow.php">
<a href="delete/tdeletenow.php?tid='.$tid.'" onclick="return confirm();" ><p style="color:red;">Delete</p></a></th>
<th width="110px"><form method="post" action="adminmessage.php" >
<a href="subadmin/temessage.php?tid='.$tid.'" ><p style="color:blue;">Message</p></a></th>
</tr>
</table></center></form>';
	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?>