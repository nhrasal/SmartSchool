<?php 




if(isset($_POST['btn_upload']))
{


	$filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "image/".$filename;

    move_uploaded_file($filetmp,$filepath);

$tid=$_POST['tchr_id'];
$mid=$_POST['ms_id'];
$sid=$_POST['std_id'];
$aid=$_POST['ad_id'];
$mst=$_POST['message'];
$msd=$_POST['messaged'];




include("../database/config.php");


$result="INSERT INTO message(tchr_id,ms_id,std_id,ad_id,message,messaged,img_name,img_path,img_type)
VALUES('$tid','$mid','$sid','$aid','$mst','$msd','$filetmp','$filename','$filetype')";


$query = mysqli_query($myconn,$result );


header("location:home.php");

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