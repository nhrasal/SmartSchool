<?php
include("database/config.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<?php include("title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div id="header">
<?php include("top/topheader.php"); ?>
</div>
<div id="menu">
 <tr><td> <?php include("menu/menu.php");   ?></td></tr></div>
<div  id="cont">
<tr>
<td>
<td>
<div id="head" >
<?php include("header/header.php");   ?>


</div>
</td>
<td>
<div >
  <?php

include("containt/containt.php");


?>
</div></td>
  <?php

include("implink/implink.php");


?>
</div></td>

<td><div>

<?php

include("sidbar/sidbar.php");


?>


</div>

</td>
<td><div id="notice">
<marquee scrollamount="3" onMouseOver="this.stop()" onMouseOut="this.start()"><h3><b><p style="color:white; font-family:Algerian;  font-size:14px "><?php include("marquee/marquee.php"); ?></p></b></h3></marquee>
</div>
</td>
</tr>

<div id="footer">
<?php include("footer/footer2.php");   ?>
<div id="footer2">
<?php include("footer/footer.php");   ?>
</div>
</div>
</div>
</body>
</html>