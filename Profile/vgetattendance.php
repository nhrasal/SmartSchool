
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
  <div id="" >
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
  <br>
 <br>
  <br>
 <br>

       
      <tr>
        
        <form id="" name="" method="POST" action="attn_date_to_date.php?std_id=<?php echo $stdid; ?>" enctype="multipart/form-data">

 <div align="center"><h3><b> <label for="class">Select Month</label><br />
 <td><select name="date" >
 <option value="">Select</option>
 <option value="1">January</option>
 <option value="2">February</option>
 <option value="3">March</option>
 <option value="4">April</option>
 <option value="5">May</option>
 <option value="6">Jun</option>
 <option value="7">July</option>
 <option value="8">August</option>
 <option value="9">September</option>
 <option value="10">October</option>
 <option value="11">November</option>
 <option value="12">December</option>

 
 </select>
 </td>
    <td>  <input type="submit" class="btn primary" id="" value="Submitt" /></td></div>
      </form>
        </tr>
  
  <center>
  <table width="70%">
          <tr><td colspan="6"> <h3>View <?php echo $name; ?> Attendance </h2></td>
    <tr>
     <td>Date</td>
    <td>Course</td>

    <td> Teacher</td>
    <td> Status</td>
    </tr>
     
         
<?php

include("../database/config.php");

$sid=$_GET['std_id'];
$start=$_POST['date'];

$sql = "SELECT * FROM stdattendance 
WHERE date='$start' AND std_id='$sid'";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$sid=$row['std_id'];
	$tid=$row['tchr_id'];

$name=$row['firstname'];
$class=$row['cls_id'];
$cors=$row['course'];
$status=$row['status'];
$date=$row['date'];

  ?>
  
  <tr>
  <td><?php echo $date; ?></td>
   <td> <?php echo $cors; ?></td>
    
    
      <td><a href="tdetails.php?tchr_id=<?php echo $tid; ?>" target="_blank"> Details</a></td>
    
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
