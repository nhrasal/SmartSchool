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

div.tdetails {
  width: 400px;
  background-color: white;
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;

}

div.container {
  text-align: center;
    padding:10px 20px;
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

<table><tr>
<center><h2>Our Teacher's</h2></center>
<td>
<?php
include("database/config.php");
$sql=" SELECT * FROM teacherinfo";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query))
{

$name=$row['tname'];
$tid=$row['tchr_id'];
$image=$row['img_path'];	

	


echo'<div id="tdetails" style="float:left; padding:40px;  " text-align="center">

<img src="admin/image/'.$image.'" style=" width: 200px; height:200px; background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px; padding:5px; border-radius:200px" >
<br>
'.$name.' <br>
<a href="tdetails.php?tchr_id='.$tid.'"><p style="color:green" >Details...</p></a>

</div>
';
	
}

?>


</td>
</tr></table>


<tr><td><div id="footer">
<?php include("footer/footer2.php");   ?>

<div id="footer2">
<?php include("footer/footer.php");   ?>
</div>
</div></tr></td>
</div>
</body>
</html>