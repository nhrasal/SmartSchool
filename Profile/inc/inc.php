
<?php



include("../database/config.php");
$uname=$_REQUEST['std_id'];


$sql = "SELECT * FROM admissionform INNER JOIN classinfo ON admissionform.cls_id= classinfo.cls_id WHERE std_id='$uname' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$stdid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$lname=$row['lastname'];
$class=$row['clsname'];
$conta=$row['monumber'];
$email=$row['email'];

	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>



