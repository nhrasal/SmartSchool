<?php
include("database/config.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<br />
<br />
<center><table align="center">
<tr><td><center><b>Title</b></center></td>
<td><b>Detils</b></td>
</tr>
<?php
include("database/config.php");
$sql=" SELECT * FROM notice ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query))
{

$title=$row['notice_title'];
$nid=$row['notice_id'];
?>



<tr><td width="400px"><?php echo $title; ?></td><td ><a href="viewnotice.php?notice_id=<?php echo $nid ?>"><p style="color:green">Details</p></a></td></tr>
<?php } ?>
</table>
</center>
<div >
  
<div id="footer">
<?php include("footer/footer2.php");   ?>
<div id="footer2">
<?php include("footer/footer.php");   ?>
</div>
</div>
</div>
</body>
</html>