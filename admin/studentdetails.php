<?php
include("login/session.php");
include("../database/config.php");

$sid=$_GET['pid'];
$sql = "SELECT * FROM admissionform WHERE std_id=$sid  ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['std_id'];

$image=$row['img_path'];
$cls=$row['cls_id'];
$dof=$row['dofb'];
$cnty=$row['country'];
$fname=$row['fathersname'];
$mname=$row['mothersname'];
$addr1=$row['preadds'];
$addr2=$row['preadds'];
$eml=$row['email'];
$gdr=$row['gender'];
$pass=base64_decode($row['password']);

$name=$row['firstname'];
$name2=$row['lastname'];
$mobile=$row['monumber'];
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
<tr><center><td></td width="100px"><td width="200px" align="center"><img src="../image/<?php echo $image; ?>" style=" border-radius: 200px" width="200px" height="200px" position="absolute"/></td></td></tr>
<h4><b><tr><td width="100px">Student Id </td><td width="200px"><?php echo $tid; ?></td></tr>
<tr><td width="100px"> Name </td><td width="200px"><?php echo $name; ?></td></tr>
<tr><td width="100px"> Gender </td><td width="200px"><?php echo $gdr; ?></td></tr>
<tr><td width="100px"> Fathers Name </td><td width="200px"><?php echo $fname; ?></td></tr>
<tr><td width="100px"> Mothers Name </td><td width="200px"><?php echo $mname; ?></td></tr>
 
<tr><td width="100px"> Present Address  </td><td width="200px"><?php echo $addr1; ?></td></tr>
<tr><td width="100px"> Permenant Address  </td><td width="200px"><?php echo $addr2; ?></td></tr>
<tr><td width="100px">Mobile </td><td width="200px"><?php echo $mobile; ?></td></tr>
<tr><td width="100px">Country </td><td width="200px"><?php echo $cnty; ?></td></tr>
<tr><td width="100px">Email </td><td width="200px"><?php echo $eml; ?></td></tr>
<tr><td width="100px"> Class </td><td width="200px"><?php echo $cls; ?></td></tr>
<tr><td width="100px">Date Of Birth </td><td width="200px"><?php echo $dof; ?></td></tr>
<tr><td width="100px">User name </td><td width="200px"><?php echo $user; ?></td></tr>
<tr><td width="100px">Password </td><td width="200px"><?php echo $pass; ?></td></tr>
<tr><td width="100px"> </td><form action="allstudent.php"><td width="200px"><input type="submit" value="Back" /></td></form></tr>

</table></center>
<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>