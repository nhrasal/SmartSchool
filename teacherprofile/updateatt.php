
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
 <div class="container-fluid p-0"> <br>
   <br>  <br>
   <br>  <br>
   <br> 

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
       
        <center>
               <?php

if(isset($_SESSION['error']))
{
error_reporting(0);
echo '<p>'.$_SESSION['error']['date'].'</p>';
echo '<p>'.$_SESSION['error']['email'].'</p>';

unset($_SESSION['error']);
}
?>
        
        
        <h3><b><u>Update Addendance</u></b></h3><br>
        <br/>
       
     <div class=""> 
      <table>   
      <h4>select Class and Date</h4>
<form id="" name="" method="POST" action="classattupdate.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">

 <div align="center"><h3><b><td> 
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
 
 
  </td>
      <td><input type="date" name="date"></td>
      <td><input type="submit" class="btn primary" id="" value="Submit" /></td></div>
      </form>



</table>

      
          </div>
          

       
       </section>

 

  </body>

</html>
