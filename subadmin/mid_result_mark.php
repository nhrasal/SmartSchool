<?php
include("login/session.php");

?>
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
<table width="80%">
<div><span style="font-size:24px">Mid Term Exam Result View System</span><br /> </div><br />
<br />
<br />
  <?php



include("../database/config.php");

$cls=$_POST['cls_id'];

$sql = "SELECT * FROM courseinfo WHERE cls_id='$cls' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$cls=$row['cls_id'];

}}
?>

<form id="" name="" method="POST" action="mid.php?cls_id=<?php echo $cls; ?>" enctype="multipart/form-data">

<div> <label for="class"><span style="font-size:18px; color:#666">Select Course</span></label><br />
    <select id="clas" name="course_id"  required>
    <option value="">Select</option></br>
    <?php



include("../database/config.php");
$cls=$_POST['cls_id'];

$sql = "SELECT * FROM courseinfo WHERE cls_id='$cls' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$crid=$row['course_id'];
	$cor=$row['coursename'];
	$cls=$row['cls_id'];

?>

<option value="<?php echo $crid; ?>"><?php echo $cor; ?></option>
<?php

	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?></select></div></br>
    
      <input type="submit" class="btn primary" id="" value="Submit" /></div>
      </form>


 
 <tr><td width="150px" height="50px"><b>Student Id</b></td><td width="150px"><b>Student name</b></td><td width="150px"><b>Class</td><td width="150px"><b>Course</b></td><td width="150px"><b>Teacher</b></td><td width="150px"><b>Mark</td><td width="150px"><b>Grad</td><td width="150px"><b>GPA</b></td><td width="150px"><b>Result Update</b></td></tr>

<?php


include("../database/config.php");

$sql = "SELECT * FROM midresult WHERE cls_id='".$_POST["cls_id"]."' ";

$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
$stdid=$row['std_id'];
$name=$row['firstname'];
$clsid=$row['cls_id'];
$cors=$row['course'];
$tid=$row['tchr_id'];
$midexam=$row['midexam'];
$tchr=$row['tchr_id'];
$rslt=$row['rslt_id'];
	?>

     
   
     <tr><td height="50px"><?php echo $stdid; ?></td>
     <td><?php echo $name; ?></td>
     <td><?php echo $clsid; ?></td>
      <td><?php echo $cors; ?></td>
      <td><a href="teacherdetails.php?tchr_id=<?php echo $tchr; ?>" target="_blank"><p style="color:green;">Details</p></a></td>
       <td><?php echo $midexam; ?></td>
       <td><?php include("grade/mid_grade.php"); ?></td>
       <td><?php include("grade/mid_gpa.php"); ?></td>
       <td><a href="midmark_update.php?rslt_id=<?php echo $rslt; ?>"><p style="color:green;">Update</p></a></td>
    
     </tr>     
    
    <?php
  
    }	
    } else {
        echo "0 results";
    }


    mysqli_close($myconn);

?>


<div id="footer">
 <?php include("footer/footer.php"); ?>

</div>



</div>
</body>
</html>