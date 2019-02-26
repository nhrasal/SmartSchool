

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

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
       
       <div class="my-auto">
          
          </div>
          
          
           <table  width="80%">
          <tr><td colspan="6"> <h3>View Student Attendance for Class <?php echo $class1; ?></h2></td>
    <tr>
     <td>Date</td>
    <td>Std ID</td>
    <td> Name</td>
    <td> Class</td>
    <td>Subject</td>
   
    <td> Status</td>
    </tr>
  
<?php

include("../database/config.php");

$tid=$_GET['tchr_id'];



$sql = "SELECT * FROM admissionform INNER JOIN stdattendance ON admissionform.std_id= stdattendance.std_id";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$sid=$row['std_id'];

$name=$row['firstname'];
$class=$row['class'];
$cors=$row['course'];
$status=$row['status'];
$date=$row['date'];

  ?>
  
  <tr>
  <td><?php echo $date; ?></td>
    <td><?php echo $sid; ?></td>
    <td> <?php echo $name; ?></td>
    <td> <?php echo $class; ?></td>
    <td><?php echo $cors; ?></td>
    
    <td> <?php echo $status; ?></td>
    </tr>

  
  <?php 
  
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>

    
      </table> </div>       
     

       
       </section>

 

  </body>

</html>
