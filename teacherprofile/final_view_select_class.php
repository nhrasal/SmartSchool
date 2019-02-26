

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
       <?php

if(isset($_SESSION['error']))
{
error_reporting(0);
echo '<p>'.$_SESSION['error']['date'].'</p>';
echo '<p>'.$_SESSION['error']['email'].'</p>';

unset($_SESSION['error']);
}
?>
       
       <center>
        <h3><b><u>Final  Exam Result View System</u></b></h3><br>
        <br/>
       
     <div class=""> 
      <table>   
<form id="" name="" method="POST" action="final_result_view_classwise.php?tchr_id=<?php echo $tid; ?>" enctype="multipart/form-data">

 <div align="center"><h5 style="color:#999"> <label for="class">Select Class</label><br />
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



</table>
          
          </div>
          

       
       </section>

 

  </body>

</html>
