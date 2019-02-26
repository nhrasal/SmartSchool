

<?php


include("login/session.php");
include("../database/config.php");

$tid=$_GET['tchr_id'];



$sql = "SELECT * FROM teacherinfo WHERE tchr_id='$tid' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['tchr_id'];

$image=$row['img_path'];
$name=$row['tname'];
$class1=$row['class1'];
$class2=$row['class2'];
$cors1=$row['course1'];
$cors2=$row['course2'];
$conta=$row['mnumber'];
$email=$row['email'];

	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>








<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $name; ?>
   </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>
  <div id="" >
<?php include("header/header.php");   ?>

</div>
  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      
         <?php include("menu/menu.php"); ?>
      </div>
    </nav>
 <div class="container-fluid p-0">
  <br> 
    <br>
   <br> 
    <br>
   <br> 
    <center>

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
      <div class="">
      <form id="photo" name="photo" method="post" action="message.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data" onSubmit="return confirm('Are you sure?');" >

    <div>Message Title</div>
    <input id="message"  name="message" type="text"  >


     <div>Description:</div>

     <textarea name="messaged" id="messaged" rows="3" cols="40"></textarea>
     <div>Photo:</div>

      <input type="file" name="file_img" id="file_img" >

    <div><input type="submit" name="btn_upload" button id="submit" value="Send"   ></button> </div>
  </h2></center>
  </form>

      </div>
      </section>

       
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




include("../database/config.php");


$result="INSERT INTO message(tchr_id,ms_id,std_id,ad_id,message,messaged,img_name,img_path,img_type)
VALUES('$tid','$mid','$sid','$aid','$mst','$msd','$filetmp','$filename','$filetype')";


$query = mysqli_query($myconn,$result );




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

 

  </body>

</html>
