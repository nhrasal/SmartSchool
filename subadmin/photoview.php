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
<div><form action="addphoto.php"><input type="submit" name="" value="Add Photo" /></form></div>
<center>

<table width="70%">
<h3> Image Gelary </h3>
<tr>
<td height="">Image </td>
<td height="">Image Title</td>
<td width="">Delete</td>
<?php
include("../database/config.php");
$sql=" SELECT * FROM photo";
$query=mysqli_query($myconn,$sql);


while($row=mysqli_fetch_array($query))
{

$picname=$row['picname'];
$pid=$row['pc_id'];
$picpath=$row['img_path'];	
	
$pdesc=$row['pdesc'];	

?>
<tr>
<td><a href="previewphoto.php?pid=<?php echo $pid; ?>" ><img src="../admin/<?php echo $picpath; ?> " height="100px" width="100px" /></a></td>
<td><?php echo $picname; ?></td>
<td><a href="delete/photodelete.php?pid=<?php echo $pid; ?>" onclick="return confirm('Are you sure you want to Delete?');"  ><p style="color:red">Delete Now</p></a></td></tr>


<?php



}

?>







</table>
</div>

</div>
</body>
</html>