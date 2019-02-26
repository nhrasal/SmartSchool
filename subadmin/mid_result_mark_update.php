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
<div><span style="font-size:24px">Mid Term Exam Result Update System</span><br /> </div><br />
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

<form id="" name="" method="POST" action="midupdate.php?cls_id=<?php echo $cls; ?>" enctype="multipart/form-data">
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
	$clsid=$row['course_id'];
	$name=$row['coursename'];

?>

<option value="<?php echo $clsid; ?>"><?php echo $name; ?></option>
<?php

	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?></select></div>

</br>
    
      <input type="submit" class="btn primary" id="" value="Submit" /></div>
      </form>
<div>

 
 <tr><td width="150px" height="50px"><b>Student Id</b></td><td width="150px"><b>Student name</b></td><td width="150px"><b>Class</td><td width="150px"><b>Course</b></td><td width="150px"><b>Teacher</b></td><td width="150px"><b>Current Mark</td><td width="150px"><b>Update Mark</td></tr>

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
$rslt=$row['rslt_id'];
$tchr=$row['tchr_id'];
	?>
<form id="" name="" method="POST" action="mid_result_mark_update_update.php" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to Update?');">
     
   
     <tr><td height="50px"><?php echo $stdid; ?></td>
     <td><?php echo $name; ?></td>
     <td><?php echo $clsid; ?></td>
      <td><?php echo $cors; ?></td>
      <td><a href="teacherdetails.php?tchr_id=<?php echo $tchr; ?>" target="_blank"><p style="color:green;">Details</p></a></td>
      <td><?php echo $midexam; ?></td>
       <td><input type="number" name="midexam[]" value="<?php echo $midexam; ?>"  required /></td>
       <input type="hidden" name="rslt_id[]" value="<?php echo $rslt; ?>"/>
  
       </tr>     
    
    <?php
  
    }	
    } else {
        echo "0 results";
    }


    mysqli_close($myconn);

?>

<tr><td colspan="7"><input type="submit" name="submit" value="Update Now" /></td></tr>
</form>
</div>
<div id="footer">
 <?php include("footer/footer.php"); ?>
 
</div>
</div>
</body>
</html>