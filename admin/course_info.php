<?php
include("login/session.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
body {margin:25px;}

div.polaroid {
  width: 400px;
  background-color: #f2f2f2f2;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
</style>
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
<center>

<table width="70%">
<h3>Course Information </h3>
<tr>
<td height="">Course Name </td>
<td height=""> Class</td>
<td width=""> Teacher</td></tr>
<?php
include("../database/config.php");
$sql=" SELECT * FROM teacherinfo INNER JOIN courseinfo ON teacherinfo.tchr_id= courseinfo.tchr_id INNER JOIN classinfo ON classinfo.cls_id= courseinfo.cls_id ";

$query=mysqli_query($myconn,$sql);


while($row=mysqli_fetch_array($query))
{

$crname=$row['coursename'];
$clsname=$row['clsname'];
$tchr=$row['tchr_id'];
$crsid=$row['course_id'];
$tname=$row['tname'];

?>
<tr>
<td><?php echo $crname; ?></td>
<td><?php echo $clsname; ?></td>
<td><a href="tdetails.php?tchr_id=<?php echo $tchr; ?> "><p style="color:green"><?php echo $tname; ?></p></a></td>

</tr>


<?php



}

?>







</table>
<form action="addcourse.php"><input type="submit" name="Add Notice" value="Add Course"  /></form>
</div>

</div>
</body>
</html>