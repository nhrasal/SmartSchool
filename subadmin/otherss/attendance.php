<?php
include("login/session.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<!--[if lt IE 9]>
  <script src="html5shiv.jsp"></script>
<![endif]-->
<?php include("../admin/title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<body>
<div id="head" >
<?php include("../admin/header/header.php");   ?>

</div>
<div class="sidenav">
  <?php include("menu/menu.php"); ?>
</div>

<div  class="cont">
<div id="form">
<center>
<form id="" name="" method="POST" action="forclass.php" enctype="multipart/form-data">

 <div> <label for="class">Select Class</label><br />
    <select id="clas" name="class"  required>
    
    <option value=""></option>
      <option value="one">One</option>
      <option value="two">Two</option>
      <option value="three">Three</option>
      <option value="four">Four</option>
      <option value="five">Five</option>
      <option value="six">Six</option>
	  <option value="seven">Seven</option>
      <option value="eight">Eight</option>
      <option value="nine">Nine</option>
      </select></div></br>
      <input type="submit" id="" value="Submitt" />
      </form></center>
<div id="footer">
<?php include("../admin/footer/footer.php");   ?>
</div>



</div>
</body>
</html>