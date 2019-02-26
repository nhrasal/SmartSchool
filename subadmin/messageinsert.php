
<?php




if(isset($_POST['btn_upload']))
{


	$filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "image/".$filename;

    move_uploaded_file($filetmp,$filepath);

$tid=$_GET['tchr_id'];
$mid=$_POST['ms_id'];
$sid=$_GET['std_id'];
$aid=$_GET['ad_id'];
$mst=$_POST['message'];
$msd=$_POST['messaged'];
$date=date("Y-m-d");





include("../database/config.php");


$result="INSERT INTO message(tchr_id,ms_id,std_id,ad_id,message,messaged,date,img_name,img_path,img_type)
VALUES('$tid','$mid','$sid','$aid','$mst','$msd','$date','$filetmp','$filename','$filetype')";


$query = mysqli_query($myconn,$result );


header("location:index.php");

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