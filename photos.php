<?php
include("database/config.php")
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
  background-color: white;
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

<div id="header">
<?php include("top/topheader.php"); ?>
</div>

<div id="menu">

<?php include("menu/menu.php");   ?>
</div>
<div  id="cont">
<center>

<table width="70%">
<h3> Image Gallery </h3>
<?php
include("database/config.php");
$sql=" SELECT * FROM photo";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query))
{

$name=$row['picname'];
$pid=$row['pc_id'];
$image=$row['img_path'];	

	


echo'<div id="tdetails" style="float:left; padding:40px;  " text-align="center">
<div style="width: 310px;
  height:310px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  padding:5px;">
<a href="previewphoto.php?pc_id='.$pid.'">
<img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="admin/'.$image.'" style=" width:250px;
  height:250px; " ></a><br/>'.$name.'</div>

 

</div>
';
	
}

?>

<script>
function bigImg(x) {
    x.style.height = "280px";
    x.style.width = "280px";
}

function normalImg(x) {
    x.style.height = "250px";
    x.style.width = "250px";
}
</script>

</table>
</div>

</div>
</body>
</html>