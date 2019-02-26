<?php

session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
body {margin:25px;}

div.login {
  width: 40%;
  height:40%
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

</style>
</head>

<body>
<div id="header">
<?php include("top/topheader.php"); ?>
</div>

</div>
<div id="menu">
<?php include("menu/menu.php");   ?>

</div>

<div  id="cont"><center>
<div class="login">
<?php
if(isset($_SESSION['error']))
{
error_reporting(0);
echo '<h3><b><p style="color:red; font-family:Algerian; font-size:25px;">'.$_SESSION['error']['admissioner'].'</p></b></h3>';
echo '<h3><b><p style="color:green; font-family:Algerian; font-size:25px;">'.$_SESSION['error']['admissionse'].'</p></b></h3>';

unset($_SESSION['error']);
}
?>

</center>

<div id="footer">
<?php include("footer/footer2.php");   ?>
<div id="footer2">
<?php include("footer/footer.php");   ?>
</div>
</div>
</div>
</body>
</html>