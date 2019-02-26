<?php 




if(isset($_POST['btn_upload']))
{


	$filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "image/".$filename;

    move_uploaded_file($filetmp,$filepath);

$tid=$_POST['tchr_id'];
$tnam=$_POST['tname'];
$tfnam=$_POST['tfname'];
$add=$_POST['address'];
$mnbr=$_POST['mnumber'];
$eml=$_POST['email'];
$edqf=$_POST['eduqf'];
$gndr=$_POST['gender'];
$unm=$_POST['uname'];
$pass=base64_encode($_POST['password']);



include("../database/config.php");


$result="INSERT INTO teacherinfo(tchr_id,tname,tfname,address,mnumber,email,eduqf,gender,uname,password,img_name,img_path,img_type)
VALUES('$tid','$tnam','$tfnam','$add','$mnbr','$eml','$edqf','$gndr','$unm','$pass','$filetmp','$filename','$filetype')";


$query = mysqli_query($myconn,$result );


header("location:addteacher.php");

if($query==="TRUE")
{
	echo "data insert  ok";	
}
else {
	echo "data insert is not ok";	
	}
}

exit();

?>