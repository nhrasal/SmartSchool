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

<table><center>
<form id="" name="" method="POST" action="admissionnewforclass.php" enctype="multipart/form-data">

 <div><h3><b> <label for="class">Select Class</label><br />
    <select id="clas" name="cls_id"  required>
     <option value=""></option>
      <?php



include("../database/config.php");


$sql = "SELECT * FROM classinfo ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$clsid=$row['cls_id'];
	$name=$row['clsname'];

?>

<option value="<?php echo $clsid; ?>"><?php echo $name; ?></option>

<?php

	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?></select></div></br>
      <input type="submit" id="" value="Submitt" /></div>
      </form>
</center></table>
<center><table width="80%">
<p style="font-size:30px"><b>All Admission Student</b></p>
 <tr>
<th width="90px">Std ID</th>
<th width="128px">Std Photo</th>
<th width="125px">Std Name</th>
<th width="120px">Class</th>
<th width="140px">Contact</th>
<th width="50px">Action</th>



</tr>

<?php
include("../database/config.php");

$sql = "SELECT * FROM admissionform WHERE cls_id='".$_POST["cls_id"]."' AND action='new' ";
$query=mysqli_query($myconn,$sql);

if (mysqli_num_rows($query) > 0) {

 while($row = mysqli_fetch_assoc($query)) 
	
	
{
	$sid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$class=$row['cls_id'];
$mobile=$row['monumber'];
$user=$row['uname'];
?>
 <tr>
<th width="114px"><?php echo $sid; ?></th>
<th width="150px"><img src="../image/<?php echo $image; ?>"  width="50px" height="50px" style=" border-radius: 50px" position="absolute"/></th>
<th width="150px"><a href="studentdetails.php?pid=<?php echo $sid; ?>"><p style="color:black"><?php echo $name; ?></p></a></th>
<th width="150px"><?php echo $class; ?></th>
<th width="150px"><?php echo $mobile; ?></th>
<th width="55px"><a href="sactive.php?std_id=<?php echo $sid; ?>" onclick="return confirm('Are you sure you want to Active?');"> Active</th>
<th width="75px"><form method="post" action="sdeletenow.php" onclick="delete();">
<a href="delete/sdeletenow.php?std_id=<?php echo $sid; ?>" onclick="return confirm('Are you sure you want to Delete?');" ><p style="color:red;">Delete</p></a></th>



</tr>



<?php   }	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?>
</table></center>


<div id="footer">
 <?php include("footer/footer.php"); ?>

</div>



</div>
</body>
</html>