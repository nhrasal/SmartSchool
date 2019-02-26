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
<tr>
<td>
<table align="center">

<?php
include("database/config.php");

$nid=$_GET['notice_id'];
$sql=" SELECT * FROM notice WHERE notice_id='$nid' ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query))
{

$title=$row['notice_title'];
$des=$row['notice_des'];
$nid=$row['notice_id'];
$img=$row['img_path'];
?>
<tr><td><center><h2><b><u><?php echo $title; ?></u></b></h2</center></td>

</tr>
<tr><td><?php echo $des; ?></td>
</tr>
<tr><td>
<center>
<img src="admin/image/<?php echo $img; ?>" style=" width: 600px; height:400px;
  background-color: white;padding: 10px 20px;
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;" ></center>
</td></tr>

<?php } ?>
</table>
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