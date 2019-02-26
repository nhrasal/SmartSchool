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
   width: 600px;
  height:600px;
  background-color: #f2f2f2f2;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  padding:20px;
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
<h3> Image Gelary </h3>

<?php
include("../database/config.php");
$pid=$_GET['pid'];
$sql=" SELECT * FROM photo Where pc_id='$pid' ";
$query=mysqli_query($myconn,$sql);


while($row=mysqli_fetch_array($query))
{

$picname=$row['picname'];
$pid=$row['pc_id'];
$picpath=$row['img_path'];	
	
$pdesc=$row['pdesc'];	
}

?>

<div class="polaroid">
<img src="../admin/<?php echo $picpath; ?> " height="400px" width="400px" />

<br />
<br />

<p><b><?php echo $picname; ?></b></p>
<p><?php echo $pdesc; ?></p>
<form action="photoview.php"><input type="submit" value="Back" name="Submit" /></form>
</div>



</table>
</div>

</div>
</body>
</html>