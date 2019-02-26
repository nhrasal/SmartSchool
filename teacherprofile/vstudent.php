


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
           
       
       <table class="table table-striped" width="80%"><center>
 
    
<form id="" name="" method="POST" action="vstudent.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">

 <div align="center"><h4 style="color:#999"> <label for="class">Select Class</label><br />
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
      </select></b></h3>
      <input type="submit" class="btn primary" id="" value="Submit" /></div>
      </form>



  <table>
          <tr><td colspan="6"> <center><h3> Student Information </h3></center></td>
    <tr>
     
    <td width="200px"> Name</td>
    <td width="200px">Contact</td>
    <td width="300px"> Email</td>
    <td width="100px"> About</td>
    </tr>
<?php


include("../database/config.php");

$tid=$_GET['tchr_id'];

$sql = "SELECT * FROM courseinfo WHERE  cls_id='".$_POST["cls_id"]."' AND tchr_id='$tid'   ";

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

$sql = "SELECT * FROM admissionform WHERE cls_id='".$_POST["cls_id"]."' AND action='active'  ";

$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
$stdid=$row['std_id'];
$name=$row['firstname'];
$contact=$row['monumber'];
$email=$row['email'];

	?>
<tr>
        <td> <?php echo $name; ?></a></td>
    <td><?php echo $contact; ?></td>
    <td><?php echo $email; ?></td>
    <td><a href="studentdetails.php?std_id=<?php echo $stdid; ?>" target="_blank">Details</a></td>
    
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






 