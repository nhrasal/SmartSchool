
<?php
//save photo on the folder
if(isset($_POST['btn_upload']))
{
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "image/".$filename;

    move_uploaded_file($filetmp,$filepath);
//insert photo info

$picname=$_POST['picname'];
$pdesc=$_POST['pdesc'];

include("../database/config.php");

$result="INSERT INTO photo(picname,img_name,img_path,img_type,pdesc)
VALUES('$picname','$filename','$filepath','$filetype','$pdesc')";
$query = mysqli_query($myconn,$result );


header("location:addphoto.php");

if($query===TRUE)
{
	echo "successfull";
}
else
{
	echo "not inserted";
}

}

exit();


?>