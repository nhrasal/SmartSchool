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
 <br>
 

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
       
       <div class="my-auto">
       
       <?php

if(isset($_SESSION['error']))
{
error_reporting(0);
echo '<p>'.$_SESSION['error']['date'].'</p>';
echo '<p>'.$_SESSION['error']['email'].'</p>';

unset($_SESSION['error']);
}
?>
       
             <tr><td colspan="6"> <h3>Send Student Attendance Information Status</h3> </td>
        <table class="table table-striped" width="80%"><center>
    
    <tr>
    <td>Std ID</td>
    <td> Name</td>
    <td> Class</td>
    <td>Email</td>
    <td> Status</td>
    </tr>
  
<?php

include("../database/config.php");

$tid=$_GET['tchr_id'];

$date=date("Y-m-d");
$value="absent";

$sql = "SELECT * FROM admissionform INNER JOIN stdattendance ON admissionform.std_id= stdattendance.std_id AND tchr_id='$tid' AND date='$date' AND status='$value' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$sid=$row['std_id'];
	

$name=$row['firstname'];
$class=$row['cls_id'];
$cors=$row['course'];
$status=$row['status'];
$date=$row['date'];
$email=$row['email'];

  ?>
  
<form  method="POST" action="send_attendance.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">

     <tr><td><?php echo $sid; ?><input type="hidden" name="std_id[]" value="<?php echo $sid; ?>"></td>
     <td><?php echo $name; ?><input type="hidden" name="firstname[]" value="<?php echo $name; ?>"></td>
     <td><?php echo $class; ?><input type="hidden" name="class[]" value="<?php echo $class; ?>"></td>
    <td><input type="hidden" name="email[]" value="<?php echo $email; ?>"><?php echo $email; ?></td>
     <td><input type="hidden" name="status[]" value="<?php echo $status;  ?>"><?php echo $status; ?></td>
     
     
     </tr>   
     
    

    
    <?php
  
    }	
    } else {
        echo "0 results";
    }


    mysqli_close($myconn);

?>


</table></center>
      <input type="submit" class="btn btn-info email_button" id="" value="Send" />
      </form>



          
          </div>
          <?php

if(isset($_SESSION['error']))
{
echo '<p>'.$_SESSION['error']['attend'].'</p>';

unset($_SESSION['error']);
}
?>
      

       
       </section>

 

  </body>

</html>
