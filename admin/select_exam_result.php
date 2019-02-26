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
<br />
<br />
<br />
<br />
<span style="font-size:24px">Exam Result View System</span><br /> 

<br />
<br />
<span style="font-size:20px; color:#999" >Select Exam Type</span>
<div><form action="mid_result_view.php"><input type="submit"  name="submi" value="Mid Term "/></form></div>
<div><form action="final_result_view.php"><input type="submit"  name="submit" value="Final Term"/></form></div>



<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>