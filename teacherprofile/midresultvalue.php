

<?php


include("login/session.php");
include("../database/config.php");
include("inc/inc.php");
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
           
       
       <table class="table table-striped" width="80%"><center>
       
       
       <br>
       <br>
       <h3><u>Mid Exam Result Input</u>  </h3>
    
<form id="" name="" method="POST" action="midresultvalue.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">

 <div align="center"><h4 style="color:#999"> <label for="class"><span style="font-size:15px">If you can change Select Class</span></label><br />
    <select id="clas" name="cls_id"  required>
     <option value=""></option>
     

<?php



include("../database/config.php");


$tid=$_GET['tchr_id'];

$sql = "SELECT * FROM courseinfo INNER JOIN classinfo ON courseinfo.cls_id= classinfo.cls_id Where tchr_id='$tid' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['tchr_id'];

$crname=$row['coursename'];
$clsid=$row['cls_id'];
$clsname=$row['clsname'];
   
   ?>

      <h3><option value="<?php echo $clsid; ?>"><?php echo $clsname; ?></option>
 
 <?php 
  }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>
      </select></b></h3>
      <input type="submit" class="btn primary" id="" value="Submit" /></div>
      </form>



  <h3 class="icon-calendar">Date: <?php echo date("D-m-y");?></h3>
<tr><td width="200px">Student Id</td><td width="200px">Student name</td><td width="200px">Class</td><td width="200px">Course</td><td width="200px">Mid Exam</td></tr>
<?php


include("../database/config.php");

$tid=$_GET['tchr_id'];

$sql = "SELECT * FROM courseinfo WHERE cls_id='".$_POST["cls_id"]."' AND tchr_id='$tid'  ";

$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
$crsname=$row['coursename'];
$crsid=$row['course_id'];
$clsid=$row['cls_id'];

  
    }	
    } else {
        echo "0 results";
    }


    mysqli_close($myconn);

?>

<?php


include("../database/config.php");

$sql = "SELECT * FROM admissionform WHERE cls_id='".$_POST["cls_id"]."' AND action='active'  ";

$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
$stdid=$row['std_id'];
$name=$row['firstname'];
$clsid=$row['cls_id'];
$email=$row['email'];
	?>

      <form id="" name="" method="POST" action="midresultinsert.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you Want to Publish Mid Term Exam Result?');">
   
     <tr><td><?php echo $stdid; ?><input type="hidden" name="std_id[]" value="<?php echo $stdid; ?>"></td>
     <td><?php echo $name; ?><input type="hidden" name="firstname[]" value="<?php echo $name; ?>"></td>
     <td><?php echo $clsid; ?><input type="hidden" name="cls_id[]" value="<?php echo $clsid; ?>"></td>
      <td><?php echo $crsname; ?><input type="hidden" name="course" value="<?php echo $crsname; ?>"></td>
         <input type="hidden" name="course_id" value="<?php echo $crsid; ?>">
         <input type="hidden" name="email[]" value="<?php echo $eml; ?>">
     <td >
       <input type="number" min="0" max="100" name="midexam[]">
       </td>
     </tr>     
    
    <?php
  
    }	
    } else {
        echo "0 results";
    }


    mysqli_close($myconn);

?>




 
 </center></table>


   <input type="submit" class="btn primary" name="submit" value="Submit" />     </form>

          </div>
          

       
       </section>

 

  </body>

</html>
