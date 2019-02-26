

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
 
    <div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
     <tr><td colspan="6"> <h3>View Student Attendance </h3></td>
    <br>
<br>
    <table> 

 
    <tr>
<form id="" name="" method="POST" action="date_clss_attendanceview.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">
   <b>Selelct Class and Date</b>

 <td><div align="center">
    <select id="clas" name="cls_id"  required>
     <option value=""></option>
     

<?php



include("../database/config.php");


$tid=$_GET['tchr_id'];

$sql = "SELECT * FROM courseinfo INNER JOIN classinfo ON courseinfo.cls_id= classinfo.cls_id Where tchr_id='$tid' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['tchr_id'];

$crname=$row['coursename'];
$clsid=$row['cls_id'];
$clsname=$row['clsname'];
   
   ?>

      <h3><option value="<?php echo $clsid; ?>"><?php echo $clsname; ?></option>
 
 <?php 
  }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>
      </select></b></h3></td>
      <td><input type="date" name="date" ></td>
     <td> <input type="submit" class="btn primary" id="" value="Submit" /></td></div>
      </form>
</tr></h3>

          
           <table  width="80%"><center>
        
   <tr><td width="200px">Date</td><td width="200px">Student Id</td><td width="200px">Name</td><td width="200px">Class</td><td width="200px">Course</td><td width="200px">Status</td></tr>
<?php


include("../database/config.php");

$tid=$_GET['tchr_id'];

$sql = "SELECT * FROM courseinfo WHERE cls_id='".$_POST["cls_id"]."' AND tchr_id='$tid'  ";

$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
$crsname=$row['coursename'];
$clsid=$row['cls_id'];

  
    }	
    } else {
        echo "0 results";
    }


    mysqli_close($myconn);

?>

<?php


include("../database/config.php");
$tid=$_GET['tchr_id'];

$sql = "SELECT * FROM stdattendance WHERE cls_id='".$_POST["cls_id"]."' AND  tchr_id='$tid'  ";

$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
$stdid=$row['std_id'];
$name=$row['firstname'];
$date=$row['date'];
$clsname=$row['cls_id'];
$status=$row['status'];
$crs=$row['course'];

	?>

     <tr>
  <td><?php echo $date; ?></td>
    <td><?php echo $stdid; ?></td>
    <td> <?php echo $name; ?></td>
    <td> <?php echo $clsname; ?></td>
   
    <td> <?php echo $crs; ?></td>
    <td> <?php echo $status; ?></td>
    </tr>

    <?php
  
    }	
    } else {
        echo "0 results";
    }


    mysqli_close($myconn);

?>




 
 </center></table>


          </div>
          

       
       </section>

 

  </body>

</html>








