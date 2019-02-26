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


<center><div><b>Student Attendance system Control</b></div></center>

<tr>
        
      <form id="" name="" method="POST" action="tattendanceforclass.php" enctype="multipart/form-data">

 <div align="center"><h3> <label for="date">Select date</label><br />
 <td><input type="date"  class="icon-calendar" name="date" value="" placeholder="Select Date.." >
    <select name="class"  required  >
      <option value="">Select Class</option>
      <option value="one">One</option>
      <option value="two">Two</option>
      <option value="three">Three</option>
      <option value="four">Four</option>
      <option value="five">Five</option>
      <option value="six">Six</option>
	  <option value="seven">Seven</option>
      <option value="eight">Eight</option>
      <option value="nine">Nine</option></select>
   <input type="submit" class="btn primary" id="" value="Submitt" /></b></h3></div></td>
      </form>
        </tr>
<center><table class="table" border="" width="80%"><center>
    
    <tr>
    <td>Date</td>
        <td>Std ID</td>
    <td> Name</td>
    <td> Class</td>
    <td> Status</td>
       <td> Teacher</td>
    </tr>

<?php
include("../database/config.php");
$date=date("Y-m-d");
$sql = "SELECT * FROM stdattendance WHERE '$date'";

$query=mysqli_query($myconn,$sql);

if (mysqli_num_rows($query) > 0) {

 while($row = mysqli_fetch_assoc($query)) 
	
	



{
	$sid=$row['std_id'];
	

$name=$row['firstname'];
$class=$row['class'];
$cors=$row['course'];
$status=$row['status'];
$date=$row['date'];
$tchr=$row['tchr_id'];

  ?>
  

     <tr>
	 <td><?php echo $date; ?><input type="hidden" name="std_id[]" value="<?php echo $sid; ?>"></td>
	
    
    <td> <?php echo $sid; ?><input type="hidden" name="std_id[]" value="<?php echo $sid; ?>"></td>
     <td><?php echo $name; ?><input type="hidden" name="firstname[]" value="<?php echo $name; ?>"></td>
     <td><?php echo $class; ?><input type="hidden" name="class[]" value="<?php echo $class; ?>"></td>
     <td><input type="hidden" name="status[]" value="<?php echo $status; ?>"><?php echo $status; ?></td>
      <td><input type="hidden" name="Tchr_id" value="<?php echo $tchr; ?>"><a href="tdetails.php?tchr_id=<?php echo $tchr; ?>" target="_blank"><?php echo $tchr; ?></a></td>
     
     </tr>     
     
    

    
    <?php
  
    }	
    } else {
        echo "0 results";
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