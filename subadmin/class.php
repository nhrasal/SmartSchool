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
<center><table><b><h2>Class information</h2></b>
<tr>
<td width="50px" height="50px"><b>Class</b></td>
<td width="50px" height="50px" ><b>Course</b></td>
<td width="50px" height="50px"><b>Student</b></td>
<td width="50px" height="50px"><b>Total Student</b></td>
</tr>

<?php
include("../database/config.php");
$sql=" SELECT * FROM classinfo";
$query=mysqli_query($myconn,$sql);


while($row=mysqli_fetch_array($query))
{

$clsname=$row['clsname'];
$clsid=$row['cls_id'];		

?>
<tr>
<td width="100px" height="50px"><?php echo $clsname; ?></td>
<td width="100px" height="50px"><a href="course_details.php?cls_id=<?php echo $clsid; ?>"><p style="color:green">Details..</p></a></td>
<td width="100px" height="50px"><a href="class_student.php?cls_id=<?php echo $clsid; ?>"><p style="color:green">Details..</p></a></td>


<td></td>
</tr>

<?php
}?>

</table>
</center>
<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>