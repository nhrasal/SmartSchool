

<?php


include("login/session.php");
include("../database/config.php");
include("inc/inc.php");

?>






<!DOCTYPE html>
<html lang="en">

  <head>
<?php include("head/head.php") ?>

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
       <h3>Student Attendance for Class </h3>
    
<form id="" name="" method="POST" action="attendance.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">

 <div align="center"><h4 style="color:#999"> <label for="class">Select Class</label><br />
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



  <h3 class="icon-calendar">Date: <?php echo date("Y-m-d");?></h3>
<tr><td width="200px">Student ID</td><td width="200px">Student name</td><td width="200px">Class</td><td width="200px">Course</td><td width="200px">Course ID</td><td width="200px">Status</td></tr>
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

	?>

      <form id="" name="" method="POST" action="atndinsert1.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">
   
     <tr><td><?php echo $stdid; ?><input type="hidden" name="std_id[]" value="<?php echo $stdid; ?>"></td>
     <td><?php echo $name; ?><input type="hidden" name="firstname[]" value="<?php echo $name; ?>"></td>
     <td><?php echo $clsid; ?><input type="hidden" name="cls_id[]" value="<?php echo $clsid; ?>"></td>
      <td><?php echo $crsname; ?><input type="hidden" name="course" value="<?php echo $crsname; ?>"></td>
      <td><?php echo $crsid; ?><input type="hidden" name="course_id" value="<?php echo $crsid; ?>"></td>
    		
     <td >
       <select name="status[]" required>
       <option value="" ></option>
                        <option value="present" >PRESENT</option>
                        <option value="absent">ABSENT</option>
                       
                    </select>
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
