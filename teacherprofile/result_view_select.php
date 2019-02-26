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
       
       <h3><b><u> Result View  Management for Student </u></b></h3><br>
       <table><h4>
       <div class="btn btn-info email_button"><a href="mid_view_select_class.php?tchr_id=<?php echo $tid; ?>" ><input type="button" name=""  value="Mid Exam"> </a></div><br>
       <br>
       <div class="btn btn-info email_button"><a href="final_view_select_class.php?tchr_id=<?php echo $tid; ?>" ><input type="button" name=""  value="Final Exam "> </a></div><br>
       <br>
       

 </table>
       
       <center>
       




          </div>
          

       
       </section>

 

  </body>

</html>
