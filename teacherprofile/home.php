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
  <body id="page-top">
    <div id="" >
<?php include("header/header.php");   ?>

</div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <?php include("menu/menu.php"); ?>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
       
       
<div class="my-auto">
          <h2 class="mb-0">
<div>
		<center><span style="coloe:blue"><h3><p style="color:#0C9">Welcome to Teacher Administration</h3></span></center>
</div>

<br>
            <span class="text-primary"><?php echo $name; ?></span>
          </h2>
          <div class="subheading mb-5"> Mobile:<?php echo $conta; ?>
           <a href="mailto:name@email.com">Email:<?php echo $email; ?></a>
          </div>
           <div class="subheading mb-5">
        <h5><b><u>Your Class And Course</u></b></h5>
           
           <table border=""><tr><td> Class</td>
           <td>Course</td></tr>
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

        <tr> <td><?php echo $clsname; ?></td>
         <td><?php echo $crname; ?></td></tr>
          
          <?php } } ?>
          </table><br>
          
          
          
          
          
          </div>
           
</div>
         
      </section>

       
       </section>

 

  </body>

</html>
