<?php
include("../database/config.php");

$sql=" SELECT * FROM admissionform";
$query=mysqli_query($myconn,$sql);

if (mysqli_num_rows($query) > 0) {
	
	echo'<center><td ><p style="font-size:30px"><b>All Student</b></p> </td></center>';
echo'<center><div id="table" ><table border="" width="80%" > <tr>
<th>Std ID</th>
<th>Std Photo</th>
<th>Std Name</th>
<th width="100px">Class</th>
<th>Contact</th>
<th>User Name</th>
<th>Edit</th>
<th>Delete</th>
<th>Message</th>


</tr>
</table></center>';

     while($row = mysqli_fetch_assoc($query)) 
	
	
{
	$pid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$class=$row['class'];
$mobile=$row['monumber'];
$user=$row['uname'];

	
	echo'<center><div id="table" ><table border=""  width="80%" > <tr>
<th width="114px">'.$pid.'</th>
<th width="150px"><img src="../image/'.$image.'"  width="50px" height="50px" position="absolute"/></th>
<th width="150px">'.$name.'</th>
<th width="150px">'.$class.'</th>
<th width="150px">'.$mobile.'</th>
<th width="140px">'.$user.'</th>
<th width="55px"><form method="post" action="edit.php" onclick="edit();">

<a href="editstdinfo.php?sid='.$pid.'" ><p style="color:green;">Edit</p></a></th>
<th width="75px"><form method="post" action="sdeletenow.php" onclick="delete();">
<a href="delete/sdeletenow.php?sid='.$pid.'" ><p style="color:red;">Delete</p></a></th>
<th width="100px"><form method="post" action="adminmessage.php" onclick="message();">
<a href="message/stdmessage.php?sid='.$pid.'" ><p style="color:blue;">Message</p></a></th>


</tr>
</table></center>';
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?>