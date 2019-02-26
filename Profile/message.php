

<?php


include("login/session.php");
include("../database/config.php");

$stdid=$_GET['std_id'];



$sql = "SELECT * FROM admissionform WHERE std_id='$stdid' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$stdid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$lname=$row['lastname'];
$class=$row['class'];
$conta=$row['monumber'];
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

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
       
       <div class="my-auto">
      
      <table class="table" align="center">
      
      <tr><td>title</td><td>description</td>
      <td>Tacher </td><td>admin</td>
      </tr>
       <?php

include("../database/config.php");

$stdid=$_GET['std_id'];



$sql = "SELECT * FROM message WHERE std_id='$stdid' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$title=$row['message'];

$image=$row['img_path'];
$name=$row['messaged'];
$tchr=$row['tchr_id'];

$admin=$row['ad_id'];


	?>
    
    
    <tr>
    <td align="center"> <?php echo $title; ?></td>
    <td height="200px" width="200px" align="center"><?php echo $name; ?></textarea></td>
    <td><a target="blank" href="tdetails.php?tchr_id=<?php echo $tchr; ?>"> <?php echo $tchr; ?></a></td>
    <td><a target="_blank" href="adetails.php?ad_id=<?php echo $aid; ?>"> <?php echo $admin; ?></a></td>
    </tr>
    
    </table>
    
    
    <?php
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>


       
         </div>
       
       </section>

 

  </body>

</html>
