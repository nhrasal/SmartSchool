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
<div><form action="vnotice.php"><input type="submit" name="" value="Add Notice" /></form></div>
<center>

<table width="70%">
<h3> Notice Board </h3>
<tr>
<td height="">Image </td>
<td height=""> Title</td>
<td width=""> Catagory</td>
<td width="">Delete</td>
<?php
include("../database/config.php");
$sql=" SELECT * FROM notice";
$query=mysqli_query($myconn,$sql);


while($row=mysqli_fetch_array($query))
{

$nt=$row['notice_title'];
$nc=$row['notice_ctgry'];
$nid=$row['notice_id'];
$picpath=$row['img_path'];		

?>
<tr>
<td><img src="image/<?php echo $picpath; ?> " height="100px" width="100px" /></td>
<td><a href="vinotice.php?notice_id=<?php echo $nid; ?>" ><p style="color:#000"><?php echo $nt; ?></p></td>
<td><?php echo $nc; ?></td>
<td><a href="delete/notice_delete.php?nid=<?php echo $nid; ?>" onclick="return confirm('Are you sure you want to Delete?');" >
<p style="color:red">Delete Now</p></a></td></tr>


<?php



}

?>







</table>
<form action="addnotice.php"><input type="submit" name="Add Notice" value="Add Notice"  /></form>
</div>

</div>
</body>
</html>