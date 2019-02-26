<?php


include("database/config.php");



$uname=$_REQUEST['uname'];


$sql = "SELECT * FROM teacherinfo WHERE uname='$uname' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$stdid=$row['uname'];

$image=$row['img_path'];
$name=$row['tname'];
$class=$row['mnumber'];
$conta=$row['address'];


	echo'<center><table border="1" style="color:white" width="50%">
	
	
	<tr>

<th width=""><h2><b>Teacher Information Table</b></h2></th></tr>

<tr>
	
<tr>

<th width="">'.$stdid.'</th></tr>

<tr>


<th width=""><img src="admin/image/'.$image.'" width="200px" height="200px"/></th></tr>

<tr>


<th width="8%">'.$name.'</th></tr>
<tr>


<th width="8%">'.$class.'</th></tr>
<tr>


<th width="8%">'.$conta.'</th></tr>

<tr>

<th width="55px"><form method="post" action="index.php" onclick="edit();">
<input type="submit" value="Logout">
</form></th>
</tr></center></table>

';
	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>






