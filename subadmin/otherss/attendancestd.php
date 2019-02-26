
<?php
include("../database/config.php");


$sid=$_GET['stdid'];
$name=$_GET['name'];
$cls=$_GET['class'];
$stts=$_GET['status'];

$sql = "SELECT * FROM admissionform WHERE class='".$_POST["class"]."' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	
echo'<div id="table"><table border="1" width="80%" > <tr>
<th width="8%" >Student Id</th>
<th width="15%" >Student Photo</th>
<th width="15%" >Student Name</th>
<th width="15%" >Class</th>
<th width="15%" >Student Contact</th>

<th width="12%" >Status</th>



</tr>
</table>';

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$stdid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$class=$row['class'];
$conta=$row['monumber'];
	echo'<table border="1" width="80%" >
<tr>
<th width="8%">'.$stdid.'</th>

<th width="15%"><img src="../image/'.$image.'" width="50px" height="50px"/></th>
<th width="15%">'.$name.'</th>
<th width="15%">'.$class.'</th>
<th width="15%">'.$conta.'</th>
<th width="12%" name="status" >
<input type="radio" name="present" Value="present">Present
<input type="radio" name="absence" Value="absence">Asence
</th>';
	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?>






