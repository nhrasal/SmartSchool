
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
       
       <h3><b><u>Select Your Exam </u></b></h3><br>
       <table><h4>
       <div class="btn btn-info email_button"><a href="mid_result.php?std_id=<?php echo $uname; ?>" ><input type="button" name=""  value="Mid Exam Result"> </a></div><br>
       <br>
       <div class="btn btn-info email_button"><a href="final_result.php?std_id=<?php echo $uname; ?>" ><input type="button" name=""  value="Final Exam Result"> </a></div><br>
      
       

 </table>
       
       <center>
       




          </div>
          

       
       </section>

 

  </body>

</html>
