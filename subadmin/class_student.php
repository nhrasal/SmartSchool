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
<div>Total Student for this Class:<b><?php include('total/total_stdclas.php'); ?></b></div>
<center><table><b><h2>Student information</h2></b>
<tr>
<td width="100px" height="50px" ><b>Student Id</b></td>
<td width="100px" height="50px" ><b>Student Name</b></td>
</tr>

<?php
include("../database/config.php");
$clsid=$_GET['cls_id'];
$sql=" SELECT * FROM admissionform WHERE cls_id='$clsid' ";
$query=mysqli_query($myconn,$sql);


while($row=mysqli_fetch_array($query))
{

$student=$row['firstname'];
$clsid=$row['cls_id'];
$std=$row['std_id'];

?>
<tr>
<td width="100px" height="50px"><?php echo $std; ?></td>
<td width="100px" height="50px"><?php echo $student; ?></td>

</tr>

<?php
}?>
</table></center>

<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>