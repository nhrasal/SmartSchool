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
       
 <?php

if(isset($_SESSION['error']))
{
error_reporting(0);
echo '<p>'.$_SESSION['error']['date'].'</p>';
echo '<p>'.$_SESSION['error']['email'].'</p>';

unset($_SESSION['error']);
}
?>
<br>
<br>
       
             <tr><td colspan="6"> <h3>Send Student Final Result Information Status</h3> </td>
        <table class="table table-striped" width="80%"><center>
    
    <tr>
    <td>Name</td>
    <td> Course</td>
    <td> Class</td>
    <td>Email</td>
    <td> Result</td>
    <td>Grade</td>
    </tr>
  
<?php

include("../database/config.php");

$tid=$_GET['tchr_id'];
$date=date("Y-m-d");

$sql = "SELECT * FROM admissionform INNER JOIN finalresult ON admissionform.std_id= finalresult.std_id AND tchr_id='$tid' AND date='$date' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$sid=$row['std_id'];
	

$name=$row['firstname'];
$class=$row['cls_id'];
$cors=$row['course'];
$finalexam=$row['finalexam'];
$date=$row['date'];
$email=$row['email'];

  ?>
  
<form id="" name="" method="POST" action="midresult_send.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">

  <tr>
  			<input type="hidden" name="std_id[]" value="<?php echo $sid; ?>">
		<td><?php echo $name; ?><input type="hidden" name="firstname[]" value="<?php echo $name; ?>"></td>
   <td><?php echo $cors; ?><input type="hidden" name="course[]" value="<?php echo $cors; ?>"></td>
     
     <td><?php echo $class; ?><input type="hidden" name="cls_id[]" value="<?php echo $class; ?>"></td>
     <td><input type="hidden" name="email[]" value="<?php echo $email; ?>"><?php echo $email; ?></td>
     <td><input type="hidden" name="result[]" value="<?php echo $finalexam;  ?>"><?php echo $finalexam; ?></td>
     <td> <?php include("grade/final_grade.php"); ?> <input type="hidden" name="grade[]" value="<?php include("grade/final_grade.php"); ?>"></td></td>
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
