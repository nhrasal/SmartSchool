<?php
include("login/session.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
body {margin:25px;}

div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
</style>

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


<center><div><b>Student Attendance system Control</b></div></center>

<tr>

<?php



include("../database/config.php");

$cls=$_GET['cls_id'];

$sql = "SELECT * FROM courseinfo WHERE cls_id='$cls' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$cls=$row['cls_id'];

}}
?>
        
      <form id="" name="" method="POST" action="monthlyattend.php?cls_id=<?php echo $cls; ?>" enctype="multipart/form-data">

 <div align="center"><h3> <label for="date">Select date and Class</label><br />
   
 <td><select name="date" >
  <option value="">Select Month</option>
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
   
<td><label for="class">And</label>
    <select id="clas" name="course_id"  required>
    <option value="">Select</option></br>
    <?php



include("../database/config.php");
$cls=$_GET['cls_id'];

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



?></select></td>

 

  <td> <input type="submit" class="btn primary" id="" value="Submitt" /></b></h3></div></td>
      </form>
        </tr>
<center><table class="table" border="" width="80%"><center>
    
    <tr>
    <td height="50px">Date</td>
     <td>Std ID</td>
    <td> Name</td>
    <td> Class</td>
     <td> Course</td>
    <td> Status</td>
     <td> Class Teacher</td>
    </tr>

<?php
include("../database/config.php");
$cors=$_POST['course_id'];


$sql = "SELECT * FROM stdattendance WHERE cls_id='".$_GET["cls_id"]."' AND date='".$_POST["date"]."' AND course_id='$cors' ";

$query=mysqli_query($myconn,$sql);

if (mysqli_num_rows($query) > 0) {

 while($row = mysqli_fetch_assoc($query)) 
	
	



{
	$sid=$row['std_id'];
	

$name=$row['firstname'];
$class=$row['cls_id'];
$cors=$row['course'];
$status=$row['status'];
$date=$row['date'];
$tchr=$row['tchr_id'];

  ?>
 
<tr>
	 <th><?php echo $date; ?><input type="hidden" name="std_id[]" value="<?php echo $sid; ?>"></th>
	
    
    <th> <?php echo $sid; ?><input type="hidden" name="std_id[]" value="<?php echo $sid; ?>"></th>
     <th><a href="studentdetails.php?pid=<?php echo $sid; ?>"><?php echo $name; ?></a><input type="hidden" name="firstname[]" value="<?php echo $name; ?>"></th>
     <th><?php echo $class; ?><input type="hidden" name="class[]" value="<?php echo $class; ?>"></th>
     <th><?php echo $cors; ?><input type="hidden" name="class[]" value="<?php echo $cors; ?>"></th>
     <th><input type="hidden" name="status[]" value="<?php echo $status; ?>"><?php echo $status; ?></th>
      <th><input type="hidden" name="Tchr_id" value="<?php echo $tchr; ?>"><a href="tdetails.php?tchr_id=<?php echo $tchr; ?>" target="_blank">Details.
     </a></th>
     
     </tr>     
     
    
     
    

    
    <?php
  
    }	
    } else {
        echo "No Student HERE";
    }


    mysqli_close($myconn);

?>
</table></center>


<div id="footer">
 <?php include("footer/footer.php"); ?>

</div>



</div>
</body>
</html>