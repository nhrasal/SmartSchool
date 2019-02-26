<?php
include("../database/config.php");
$sid=$_GET['sid'];
$sql=" SELECT * FROM admissionform WHERE std_id=$sid";
$query=mysqli_query($myconn,$sql);

if (mysqli_num_rows($query) > 0) {
	
	echo'<center><td ><p style="font-size:30px"><b>All Students</b></p> </td></center>';

 while($row = mysqli_fetch_assoc($query)) 
	
	
{
$sid=$row['std_id'];
$fname=$row['firstname'];
$image=$row['img_path'];
$class=$row['cls_id'];
$mobile=$row['monumber'];
$uname=$row['uname'];
$pass=base64_decode($row['password']);
$action=$row['action'];

echo'<center>
<form method="POST" action="edit/edit.php">
<tr>
<td> Student Id:</td><br/> <td width="25%"><input type="int" name="std_id" value="'.$sid.'"></td></br></tr>
<tr><td> Photo:</td><br/> <th width="15%"><img src="../image/'.$image.'"  width="100px" height="100px" position="absolute"/></th><br/></tr>
<tr><td> First Name:</td><br/> <td width="20%"><input type="text" name="firstname" value="'.$fname.'" /><br/></td></tr>
<tr><td>Class:</td><br><td><input type="text" name="cls_id" value="'.$class.'" /</td></tr><br>
<tr><td> Contact:</td> <br/> <td width="15"><input type="text"  name="monumber" value="'.$mobile.'" /></td><br/></tr>
<tr><td> User Name:</td><br/> <td width="20%"><input type="text" name="uname" value="'.$uname.'" /><br/></td></tr>
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
