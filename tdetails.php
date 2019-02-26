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

<tr>
<?php
include("database/config.php");
$tid=$_GET['tchr_id'];
$sql=" SELECT * FROM teacherinfo WHERE tchr_id='$tid' ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query))
{


$tid=$row['tchr_id'];

$image=$row['img_path'];
$fname=$row['tfname'];
$addr=$row['address'];
$eml=$row['email'];
$eq=$row['eduqf'];
$gdr=$row['gender'];
$pass=base64_decode($row['password']);

$name=$row['tname'];
$mobile=$row['mnumber'];
$user=$row['uname'];
	
	


?>
<center><div>
<table  width="50%" border="">
      <h2 >About of <?php echo $name;?></h2>
      
      
   <h4><b><tr><td width="200px" colspan="2"><center><img src="admin/image/<?php echo $image; ?>" style=" width: 200px; height:200px; border-radius:200px" ></center></td></tr>   
<h4><b><tr><td width="100px">Teacher Id </td><td width="200px"><?php echo $tid; ?></td></tr>
<tr><td width="100px"> Name </td><td width="200px"><?php echo $name; ?> </td></tr>
<tr><td width="100px"> Gender </td><td width="200px"><?php echo $gdr; ?></td></tr>
<tr><td width="200px"> Fathers Name </td><td width="200px"><?php echo $fname; ?></td></tr>
 
<tr><td width="100px">  Address  </td><td width="200px"><?php echo $addr; ?></td></tr>
<tr><td width="100px">Mobile </td><td width="200px"><?php echo $mobile; ?></td></tr>
<tr><td width="100px">Email </td><td width="200px"><?php echo $eml; ?></td></tr>
<tr><td width="100px">User name </td><td width="200px"><?php echo $user; ?></td></tr>
<tr><td width="200px" colspan="2"><center><form action="teacherinfo.php"><input type="submit"  name="" value="Back" /></form></center></td></tr>
</b>
</h4></table></div></center>



<?php
	
}

?>



</td>
</tr></table>
</center>


<tr><td><div id="footer">
<?php include("footer/footer2.php");   ?>

<div id="footer2">
<?php include("footer/footer.php");   ?>
</div>
</div></tr></td>
</div>
</body>
</html>