

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
 <br>
 <br>
 <br>
 <br>

   
     <center>  
  
  
  <table width="70%">
          <tr><td colspan="6"> <h3>View  <?php echo $name; ?> Mid Term Exam Result </h2></td>
    <tr>
    
    <td> Course</td>
    <td>Course<br> Teacher</td>
    <td> Mid Exam<br><span style="font-size:15px">(Out of 100)</span></td>
     <td>Grade</td>
     <td>GPA</td>
    </tr>
     
         
<?php

include("../database/config.php");

$stdid=$_GET['std_id'];

$sql = "SELECT * FROM midresult WHERE std_id='$stdid'  ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$sid=$row['std_id'];
	$tid=$row['tchr_id'];
$class=$row['cls_id'];
$cors=$row['course'];
$midmark=$row['midexam'];

$date=$row['date'];

  ?>
  
  <tr>
  <td><?php echo $cors; ?></td>
   <td><a href="tdetails.php?tchr_id=<?php echo $tid; ?>" target="_blank">Details</a></td>
<td> <?php echo $midmark; ?> </td>
<td>
<?php 
include("grade/mid_grade.php");
?> </td>
<td>
<?php 
include("grade/mid_gpa.php");
?> </td>
    </tr>

  
  <?php 
  
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>
<tr><td ><b>Total </b></td><td > </td><td ><b><?php 


include("total/totalmidmark.php");
?> </b></td><td><b>Avarage Mark</b> </td>
<td><b><?php 
include("grade/mid_avrg_mark.php");
?>
	</b></td>
	</tr>

    
      </table>
         
          </div>

        
      </section>

       
       </section>

 

  </body>

</html>
