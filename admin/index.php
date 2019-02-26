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

<center>
<table>
<form method="post" action="search.php"><input type="text" name="name" placeholder="eneter student Id or  firstname or username or phone or email.."  required/></form>
</table>
</center>

<div>

<div style="  width:20%;
  background-color:#556B2F;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;">
<center><h1> Student<br />

<?php include("total/total_student.php"); ?>
</h1></center>
</div>

<div style="  width:20%;
  background-color:#667a44;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;">
<center><h1> Teacher<br />

<?php include("total/total_teacher.php"); ?>
</h1></center>
</div>
<div style="  width:20%;
  background-color:#809063;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;">
<center><h1> Admin<br />

<?php include("total/total_admin.php"); ?>
</h1></center>
</div>

<div style="  width:20%;
  background-color:#909f78;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;">
<center><h1> Course<br />

<?php include("total/total_course.php"); ?>
</h1></center>
</div>
<div style="  width:20%;
  background-color:#99a682;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;">
<center><h3>Admission Processing Student<br />

<?php include("total/total_newstudent.php"); ?>
</h3></p></center>
</div>
</div>

<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>