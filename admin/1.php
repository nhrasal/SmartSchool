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
<div>
<div id="head" >
<td><?php include("header/header.php");   ?>

</td>
</div>
<div class="sidenav">
  <?php include("menu/menu.php"); ?>
</div>
<div class="cont">
<td><?php include("view/viewallstudent.php"); ?></td>

<div id="">
</div>
</div>
</div>
</div>
</body>
</html>