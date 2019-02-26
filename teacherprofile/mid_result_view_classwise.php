

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
           
       <br>
       <br>
       <table class="table table-striped" width="80%"><center>
       <h3><u>Mid Exam Result View</u>  </h3>
    
<form id="" name="" method="POST" action="mid_result_view_classwise.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">

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



  <br>
  
  <br>
<tr><td width="200px">Student Id</td><td width="200px">Student name</td><td width="200px">Class</td><td width="200px">Course</td><td width="200px">Mark</td><td width="200px">Grad</td><td width="200px">GPA</td></tr>
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
$tid=$_GET['tchr_id'];

$sql = "SELECT * FROM midresult WHERE cls_id='".$_POST["cls_id"]."' AND  tchr_id='$tid'   ";

$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
$stdid=$row['std_id'];
$name=$row['firstname'];
$clsid=$row['cls_id'];
$cors=$row['course'];
$midmark=$row['midexam'];
	?>

     
   
     <tr><td><?php echo $stdid; ?></td>
     <td><?php echo $name; ?></td>
     <td><?php echo $clsid; ?></td>
      <td><?php echo $cors; ?></td>
       <td><?php echo $midmark; ?></td>
       <td><?php include("grade/mid_grade.php"); ?></td>
       <td><?php include("grade/mid_gpa.php"); ?></td>
    
     </tr>     
    
    <?php
  
    }	
    } else {
        echo "0 results";
    }


    mysqli_close($myconn);

?>




 
 </center></table>


          </div>
          

       
       </section>

 

  </body>

</html>
