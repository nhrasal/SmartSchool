<?php
include("login/session.php");
include("../database/config.php");

$tchr=$_GET['tchr_id'];
$sql = "SELECT * FROM teacherinfo WHERE tchr_id=$tchr  ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['tchr_id'];

$image=$row['img_path'];
$cls1=$row['class1'];
$cors1=$row['course1'];
$cls2=$row['class2'];
$cors2=$row['course2'];
$fname=$row['tfname'];
$addr=$row['address'];
$eml=$row['email'];
$eq=$row['eduqf'];
$gdr=$row['gender'];
$pass=base64_decode($row['password']);

$name=$row['tname'];
$mobile=$row['mnumber'];
$user=$row['uname'];
	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);

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
<center>
<table width="80%">
<tr><center><td></td width="100px"><td width="200px" align="center"><img src="image/<?php echo $image; ?>" style=" border-radius: 200px" width="200px" height="200px" position="absolute"/></td></td></tr>
<h4><b><tr><td width="100px">Teacher Id </td><td width="200px"><?php echo $tid; ?></td></tr>
<tr><td width="100px"> Name </td><td width="200px"><?php echo $name; ?></td></tr>
<tr><td width="100px"> Fathers Name </td><td width="200px"><?php echo $fname; ?></td></tr>
<tr><td width="100px">Qualification  </td><td width="200px"><?php echo $eq; ?></td></tr>
<tr><td width="100px">Address  </td><td width="200px"><?php echo $addr; ?></td></tr>
<tr><td width="100px">Mobile </td><td width="200px"><?php echo $mobile; ?></td></tr>
<tr><td width="100px">Email </td><td width="200px"><?php echo $eml; ?></td></tr>
<tr><td width="100px">Preferable Class </td><td width="200px"><?php echo $cls1; ?>,<?php echo $cls2; ?></td></tr>
<tr><td width="100px">Preferable Subject </td><td width="200px"><?php echo $cors1; ?>,<?php echo $cors2; ?></td></tr>
<tr><td width="100px">User name </td><td width="200px"><?php echo $user; ?></td></tr>
<tr><td width="100px">Password </td><td width="200px"><?php echo $pass; ?></td></tr>
<tr><td width="100px"> </td><form action="allteacher.php"><td width="200px"><input type="submit" value="Back" /></td></form></tr>

</table></center>
<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>