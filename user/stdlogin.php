<?php


include("../database/config.php");



$uname=$_REQUEST['uname'];


$sql = "SELECT * FROM admissionform WHERE uname='$uname' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$stdid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$class=$row['class'];
$conta=$row['monumber'];
	echo'<table border="" style="color:white" width="50%" ><center>
<tr>

<th width=""><p style="color:white"><h3>Student Information</h3></p></th></tr>
<tr>

<th width=""><p style="color:white">'.$stdid.'</p></th></tr>

<tr>


<th width=""><img src="image/'.$image.'" width="200px" height="200px"/></th></tr>

<tr>


<th width="8%"><p style="color:white">'.$name.'</p></th></tr>
<tr>


<th width="8%"><p style="color:white">'.$class.'</p></th></tr>
<tr>


<th width="8%"><p style="color:white">'.$conta.'</p></th></tr>

<tr>

<th width="55px"><form method="post" action="index.php" onclick="edit();">
<input type="submit" value="Logout">
</form></th>
</tr>
</center></table>

';
	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>






