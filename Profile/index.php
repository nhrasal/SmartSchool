
<?php


include("login/session.php");

include("../database/config.php");
include("inc/inc.php");


?>




<!DOCTYPE html>
<html lang="en">

  <head>

<?php
include("inc/head.php"); ?>
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
        
        
        <div><marquee></marquee></div>
<div>
<?php

if(isset($_SESSION['error']))
{

echo '<center><span style="coloe:blue"><h3>'.$_SESSION['error']['uname'].'</h3></span></center>';

unset($_SESSION['error']);
}
?>

</div>
          <h1 class="mb-0"><?php echo $name; ?>
            <span class="text-primary"><?php echo $lname; ?></span>
          </h1>
          <div class="subheading mb-5"> Mobile:<?php echo $conta; ?><br>
           <a href="mailto:name@email.com">Email:<?php echo $email; ?></a>
          </div>
          <div class="subheading mb-5"> Class: <b><?php echo $class; ?></b>
          </div>

          
      </section>

       
       </section>

 

  </body>

</html>
