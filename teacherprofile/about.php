


<?php


include("login/session.php");
include("../database/config.php");
include("inc/inc.php");

?>






<!DOCTYPE html>
<html lang="en">

  <head>
<?php include("head/head.php") ?>

  </head>  <div id="" >
<?php include("header/header.php");   ?>

</div>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <?php include("menu/menu.php"); ?>
      </div>
    </nav>

    <div class="container-fluid p-0"><br>
    <br>
    <br>
    <br>
    <br>

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
       <div >
      <table  width="100%" border="">
      <h2 >About of <?php echo $name;?></h2>
      
<h4><b><tr><td width="100px">Teacher Id </td><td width="200px"><?php echo $tid; ?></td></tr>
<tr><td width="100px"> Name </td><td width="200px"><?php echo $name; ?> </td></tr>
<tr><td width="100px"> Gender </td><td width="200px"><?php echo $gdr; ?></td></tr>
<tr><td width="200px"> Fathers Name </td><td width="200px"><?php echo $fname; ?></td></tr>
 
<tr><td width="100px">  Address  </td><td width="200px"><?php echo $addr; ?></td></tr>
<tr><td width="100px">Mobile </td><td width="200px"><?php echo $mobile; ?></td></tr>
<tr><td width="100px">Email </td><td width="200px"><?php echo $eml; ?></td></tr>

<tr><td width="100px">User name </td><td width="200px"><?php echo $user; ?></td></tr>


</table>
       
      </div> </section>

 

  </body>

</html>
