<?php
include("../database/config.php");

$sql = "SELECT COUNT(std_id)
FROM admissionform";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	
	echo'<center><td ><p style="font-size:30px"><b>All Students</b></p> </td></center>';
echo'<center><div id="table"><table border="" width="80%" > <tr>
<th width="8%" >Total Student</th
</tr>
</table></center>';

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	
$name=$row['std_id'];
	echo'<center><table border="" width="80%" >
<tr>
<th width="8%">'.$name.'</th>
';
	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?>

