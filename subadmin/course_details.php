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
<center><table><b><h2>Course information</h2></b>
<tr>
<td width="200px" height="50px" ><b>Course Name</b></td>
<td width="200px" height="50px" ><b>Course Teacher</b></td>
<td width="200px" height="50px" ><b>Teacher Details</b></td>
</tr>

<?php
include("../database/config.php");
$clsid=$_GET['cls_id'];
$sql=" SELECT * FROM courseinfo INNER JOIN teacherinfo ON courseinfo.tchr_id= teacherinfo.tchr_id WHERE cls_id='$clsid' ";





$query=mysqli_query($myconn,$sql);


while($row=mysqli_fetch_array($query))
{

$clsname=$row['coursename'];
$tname=$row['tname'];
$clsid=$row['cls_id'];
$tid=$row['tchr_id'];

?>
<tr>
<td width="100px" height="50px"><?php echo $clsname; ?></td>
<td width="100px" height="50px"> <?php echo $tname; ?></td>
<td><a href="teacherdetails.php?tchr_id=<?php echo $tid; ?> ">Details..</a></td>
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