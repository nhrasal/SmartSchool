<?php 




if(isset($_POST['btn_upload']))
{
	


	$filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "image/".$filename;

    move_uploaded_file($filetmp,$filepath);

	$stdid=$_POST['std_id'];
$classes=$_POST['class'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$faname=$_POST['fathersname'];
$moname=$_POST['mothersname'];
$preadd=$_POST['preadds'];
$peradd=$_POST['peradds'];
$mnumber=$_POST['monumber'];
$eml=$_POST['email'];
$gndr=$_POST['gender'];
$relg=$_POST['religion'];
$dofB=$_POST['dofb'];
$cntry=$_POST['country'];




include("database/config.php");


$result="INSERT INTO admissionform(std_id,class,firstname,lastname,fathersname,mothersname,preadds,peradds,monumber,email,gender,religion,dofb,country,img_name,img_path,img_type)
VALUES('$stdid','$classes','$fname','$lname','$faname','$moname','$preadd','$peradd','$mnumber','$eml','$gndr','$relg','$dofB','$cntry','$filetmp','$filename','$filetype')";


$query = mysqli_query($myconn,$result );


header("location:form2.php");

if($query==="TRUE")
{
	header("location:form2.php");
}
else {
	echo "data insert is not ok";	
	}
}

exit();

?>