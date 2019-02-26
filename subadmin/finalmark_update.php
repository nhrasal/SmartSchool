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
<div><span style="font-size:24px">Final Term Exam Result Update System</span><br /> </div><br />
<br />
<div>

 
 <tr><td width="150px" height="50px"><b>Student Id</b></td><td width="150px"><b>Student name</b></td><td width="150px"><b>Class</td><td width="150px"><b>Course</b></td><td width="150px"><b>Teacher</b></td><td width="150px"><b>Current Mark</td><td width="150px"><b>Update Mark</td></tr>

<?php


include("../database/config.php");

$rslt=$_GET['rslt_id'];

$sql = "SELECT * FROM finalresult WHERE rslt_id='$rslt'  ";

$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
$stdid=$row['std_id'];
$name=$row['firstname'];
$clsid=$row['cls_id'];
$cors=$row['course'];
$tid=$row['tchr_id'];
$finalexam=$row['finalexam'];
$rslt=$row['rslt_id'];
$tchr=$row['tchr_id'];
	?>
<form id="" name="" method="POST" action="finalmark_update_update.php" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to Update?');">
     
   
     <tr><td height="50px"><?php echo $stdid; ?></td>
     <td><?php echo $name; ?></td>
     <td><?php echo $clsid; ?></td>
      <td><?php echo $cors; ?></td>
      <td><a href="tdetails.php?tchr_id=<?php echo $tchr; ?>" target="_blank"><p style="color:green;">Details</p></a></td>
      <td><?php echo $finalexam; ?></td>
       <td><input type="number" name="finalexam" required /></td>
       <input type="hidden" name="rslt_id" value="<?php echo $rslt; ?>"/>
   
    
     </tr>     
    
    <?php
  
    }	
    } else {
        echo "0 results";
    }


    mysqli_close($myconn);

?><tr><td colspan="7"><input type="submit" name="submit" value="Update Now" /></td></tr>
</form>
</div>




</div>
</body>
</html>