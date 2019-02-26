<?php
include("../database/config.php");
$aid=$_GET['aid'];
$sql=" SELECT * FROM admininfo WHERE ad_id=$aid";
$query=mysqli_query($myconn,$sql);

if (mysqli_num_rows($query) > 0) {
	
	echo'<center><td ><p style="font-size:30px"><b>All Students</b></p> </td></center>';

 while($row = mysqli_fetch_assoc($query)) 
	
	
{
$aid=$row['ad_id'];
$name=$row['aname'];
$image=$row['img_path'];
$mobile=$row['mnumber'];
$user=$row['uname'];

echo'<center>
<form method="POST" action="edit/aedit.php">
<tr>
<td> Admin Id:</td><br/> <td width="25%"><input type="int" name="ad_id" value="'.$aid.'"></td></br></tr>
<tr><td> Photo:</td><br/> <th width="15%"><img src="../image/'.$image.'"  width="100px" height="100px" position="absolute"/></th><br/></tr>
<tr><td> Admin Name:</td><br/> <td width="20%"><input type="text" name="aname" value="'.$name.'" /><br/></td></tr>
<tr><td> Contact:</td> <br/> <td width="15"><input type="text"  name="mnumber" value="'.$mobile.'" /></td><br/></tr>
<tr><td> User Name</td> <br/> <td width="15"><input type="text"  name="uname" value="'.$user.'" /></td><br/></tr>

<tr><td width="15%" ><input type="submit" value="Update" /></td>
</tr>
</form></center>';

 }	
} else {
    echo "0 results";
}
?>

