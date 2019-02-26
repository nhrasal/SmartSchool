

<?php


include("login/session.php");

include("../database/config.php");
include("inc/inc.php");


?>




<!DOCTYPE html>
<html lang="en">

  <head>

<?php
include("inc/head.php"); ?>
  </head>
  <div >
<?php include("header/header.php");   ?>

</div>
  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <?php include("menu/menu.php"); ?>
      </div>
    </nav>
 <div class="container-fluid p-0"><br>
 <br>
 <br>

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
       
      <tr>
        
        <form id="" name="" method="POST" action="vgetattendance.php?std_id=<?php echo $stdid; ?>" enctype="multipart/form-data">

 <div align="center"><h3><b> <label for="class">Select date</label><br />
 <td><input type="date"  class="icon-calendar" name="date" value=""></td>
    <td>  <input type="submit" class="btn primary" id="" value="Submitt" /></td></div>
      </form>
        </tr>
  
  
  <table >
          <tr><td colspan="6"> <h3>View <?php echo $name; ?> Attendance </h2></td>
    <tr>
     <td>Date</td>
    <td> Course Name</td>
    <td> Teacher</td>
    <td> Status</td>
    </tr>
     
         
<?php

include("../database/config.php");

$tid=$_GET['std_id'];

$sql = "SELECT * FROM stdattendance WHERE std_id='$stdid'  ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$sid=$row['std_id'];
	$tid=$row['tchr_id'];
$class=$row['cls_id'];
$cors=$row['course'];
$status=$row['status'];
$date=$row['date'];

  ?>
  
  <tr>
  <td><?php echo $date; ?></td>
    
    <td> <?php echo $cors; ?></td>
      <td><a href="tdetails.php?tchr_id=<?php echo $tid; ?>" target="_blank"> Details..</a></td>
    
    <td> <?php echo $status; ?></td>
    </tr>

  
  <?php 
  
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>

    
      </table>
         
          </div>

        
      </section>

       
       </section>

 

  </body>

</html>
