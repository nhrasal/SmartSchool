
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<body>
<div id="head" >
<?php include("header/header.php");   ?>

</div>
<div class="sidenav">
  <?php include("menu/menu.php"); ?>
</div>

<div  class="cont">
<center>
<table width="70%">
          <tr><td colspan="6"> <h3>View Student  Mid Term Exam Result </h2></td>
    <tr>
    
    <td> Course</td>
    <td>Course<br> Teacher</td>
    <td> Mid Exam<br><span style="font-size:10px">(Out of 100)</span></td>
     <td>Grade</td>
     <td>GPA<br /> <span style="font-size:10px">Out of 5</span></td>
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
$name=$row['firstname'];

  ?>
  
  <tr>
  <td><?php echo $cors; ?></td>
   <td><a href="tdetails.php?tchr_id=<?php echo $tid; ?>" target="_blank">Details</a></td>
<td> <?php echo $midmark; ?> </td>
<td>
<?php 
include("student/mid_grade.php");
?> </td>
<td>
<?php 
include("student/mid_gpa.php");
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


include("student/totalmidmark.php");



?> </b></td><td><b>Avarage Mark</b> </td><td><b><?php 
include("grade/mid_avrg_mark.php");
?></b></td></tr>

    
      </table>
       <tr><td width="100px"> <td width="200px"><form action="allstudent.php"><input type="submit" value="Back" /></form></td></tr>
       
<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>