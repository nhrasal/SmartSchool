<?php
include("../database/config.php");

$sql=" SELECT * FROM admissionform";
$query=mysqli_query($myconn,$sql);

if (mysqli_num_rows($query) > 0) {
	
	echo'<center><td ><p style="font-size:30px"><b>All Student</b></p> </td></center>';
echo'<center><div id="table" ><table border="" width="80%" > <tr>
<th width="90px">Std ID</th>
<th width="128px">Std Photo</th>
<th width="125px">Std Name</th>
<th width="120px">Class</th>
<th width="140px">Contact</th>
<th width="120px">User Name</th>
<th width="50px">Edit</th>
<th width="70px">Delete</th>
<th width="95px">Message</th>


</tr>
</table></center>';

     while($row = mysqli_fetch_assoc($query)) 
	
	
{
	$pid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$class=$row['cls_id'];
$mobile=$row['monumber'];
$user=$row['uname'];

	
	echo'<center><div id="table" ><table   width="80%" > <tr>
<th width="114px">'.$pid.'</th>
<th width="150px"><img src="../image/'.$image.'"  width="50px" height="50px" position="absolute"/></th>
<th width="150px"><a href="studentdetails.php?pid='.$pid.' "><p style="color:black">'.$name.'</p></a></th>
<th width="150px">'.$class.'</th>
<th width="150px">'.$mobile.'</th>
<th width="140px">'.$user.'</th>
<th width="55px"><form method="post" action="edit.php" onclick="edit();">

<a href="editstdinfo.php?sid='.$pid.'" ><p style="color:green;">Edit</p></a></th>
<th width="75px"><form method="post" action="sdeletenow.php" onclick="delete();">
<a href="delete/sdeletenow.php?sid='.$pid.'" onclick="return confirm();" ><p style="color:red;">Delete</p></a></th>
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