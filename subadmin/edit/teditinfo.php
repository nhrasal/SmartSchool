<?php
include("../database/config.php");
$tid=$_GET['tid'];
$sql=" SELECT * FROM teacherinfo WHERE tchr_id=$tid";
$query=mysqli_query($myconn,$sql);

if (mysqli_num_rows($query) > 0) {
	
	echo'<center><td ><p style="font-size:30px"><b>All Students</b></p> </td></center>';

 while($row = mysqli_fetch_assoc($query)) 
	
	
{
$tid=$row['tchr_id'];
$image=$row['img_path'];
$tname=$row['tname'];
$mobile=$row['mnumber'];
$user=$row['uname'];
$pass=base64_decode($row['password']);

echo'<center>
<form method="POST" action="edit/tedit.php">
<tr>
<td> Teacher Id:</td><br/> <td width="25%"><input type="int" name="tchr_id" value="'.$tid.'"></td></br></tr>
<tr><td> Photo:</td><br/> <th width="15%"><img src="image/'.$image.'"  width="100px" height="100px" position="absolute"/></th><br/></tr>
<tr><td> Teacher Name:</td><br/> <td width="20%"><input type="text" name="tname" value="'.$tname.'" /><br/></td></tr>
<tr><td> Contact:</td> <br/> <td width="15"><input type="text"  name="mnumber" value="'.$mobile.'" /></td><br/></tr>
<tr><td> User Name</td> <br/> <td width="15"><input type="text"  name="uname" value="'.$user.'" /></td><br/></tr>
<tr><td> Password:</td><br/> <td width="20%"><input type="text" name="password" value="'.$pass.'" /><br/></td></tr>

<tr><div> <label for="action">Aaction</label><br />
    <select id="clas" name="action"  required>
       <option value="">Select</option>
      <option value="active">Active</option>
      <option value="deactive">Deactive</option>
      
      </select></div></br>



</td><br/><tr/>
<tr><td width="15%" ><input type="submit" value="Update" /></td>
</tr>
</form></center>';

 }	
} else {
    echo "0 results";
}
?>

