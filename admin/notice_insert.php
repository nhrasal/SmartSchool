<?php 




if(isset($_POST['btn_upload']))
{


	$filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "image/".$filename;

    move_uploaded_file($filetmp,$filepath);

$nid=$_POST['notice_id'];
$nctgry=$_POST['notice_ctgry'];
$ntitle=$_POST['notice_title'];
$ndes=$_POST['notice_des'];



include("../database/config.php");
$result="INSERT INTO notice(notice_id,notice_ctgry,notice_title,notice_des,img_name,img_path,img_type)
VALUES('$nid','$nctgry','$ntitle','$ndes','$filetmp','$filename','$filetype')";


$query = mysqli_query($myconn,$result );


header("location:addnotice.php");

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