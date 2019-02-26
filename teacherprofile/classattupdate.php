

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
           
       
       <center>
       <h3>Student Attendance Update for Class </h3>
    
      <h4>select Class and Date</h4>
<form id="" name="" method="POST" action="classattupdate.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">

 <div align="center"><h3><b><td> 
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
 
 
  </td>
      <td><input type="date" name="date"></td>
      <td><input type="submit" class="btn primary" id="" value="Submit" /></td></div>
      </form>




 

           <center>
           <table class="table table-striped" width="80%">
          
    <tr>
     <td>Date</td>

    <td> Name</td>
    <td> Class</td>
    <td> Course</td> 
   
    <td> Status</td>
    <td>Update Status</td>
    </tr>
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



$sql = "SELECT * FROM stdattendance WHERE tchr_id='$tid'  and cls_id='".$_POST["cls_id"]."' and date='".$_POST["date"]."' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	$counter=0;

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
$stdid=$row['std_id'];
$name=$row['firstname'];
$clsid=$row['cls_id'];
$date=$row['date'];
$status=$row['status'];
$atid=$row['atnd_id'];

	?>

      <form id="" name="" method="POST" action="attupdate.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">
   <tr><td><?php echo $date; ?><input type="hidden" name="date[]" value="<?php echo $date; ?>"></td>
     <input type="hidden" name="std_id[]" value="<?php echo $stdid; ?>">
     <td><?php echo $name; ?><input type="hidden" name="firstname[]" value="<?php echo $name; ?>"></td>
     <td><?php echo $clsid; ?><input type="hidden" name="cls_id[]" value="<?php echo $clsid; ?>"></td>
      <td><?php echo $crsname; ?><input type="hidden" name="course" value="<?php echo $crsname; ?>"></td>
      
      <input type="hidden" name="atnd_id[]" value="<?php echo $atid; ?>">
       <td> <?php echo $status; ?></td>
    		
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
