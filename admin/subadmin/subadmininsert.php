<?php 




if(isset($_POST['btn_upload']))
{


	$filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "../image/".$filename;

    move_uploaded_file($filetmp,$filepath);

$aid=$_POST['ad_id'];
$anam=$_POST['aname'];
$add=$_POST['address'];
$mnbr=$_POST['mnumber'];
$eml=$_POST['email'];
$gndr=$_POST['gender'];
$unm=$_POST['uname'];
$pass=base64_encode($_POST['password']);
$action="active";


include("../../database/config.php");


$result="INSERT INTO admininfo(ad_id,aname,address,mnumber,email,gender,uname,password,action,img_name,img_path,img_type)
VALUES('$aid','$anam','$add','$mnbr','$eml','$gndr','$unm','$pass','$action','$filetmp','$filename','$filetype')";


$query = mysqli_query($myconn,$result );


header("location:../addsubadmin.php");

if($query==="TRUE")
{
	echo "data insert  ok";	
	header("location:../addsubadmin.php");
}
else {
	echo "data insert is not ok";	
	}
}

exit();

?>