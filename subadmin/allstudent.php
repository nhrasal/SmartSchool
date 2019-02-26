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
  width: 80%;
  background-color: white;
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

<table><center>
<form id="" name="" method="POST" action="allstudentforclass.php" enctype="multipart/form-data">

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

<div style="color:#999"><h3><b>Total Student :<?php include("total/total_student.php");?></b></h3></div>
<center><table width="90%">
<div class="polaroid">
<p style="font-size:30px"><b>All Student</b></p>
 <tr>
<th width="90px">ID</th>
<th width="128px">Photo</th>
<th width="125px">Name</th>
<th width="120px">Class</th>
<th width="140px">Contact</th>
<th width="120px">User Name</th>
<th width="50px">Edit</th>
<th width="95px">Result</th>
<th width="95px">Action</th>


</tr>

<?php
include("../database/config.php");



$sql=" SELECT * FROM admissionform INNER JOIN classinfo ON admissionform.cls_id= classinfo.cls_id WHERE action='deactive' OR action='active'";
$query=mysqli_query($myconn,$sql);

if (mysqli_num_rows($query) > 0) {

 while($row = mysqli_fetch_assoc($query)) 
	
	
{
	$sid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$class=$row['cls_id'];
$clsname=$row['clsname'];
$mobile=$row['monumber'];
$user=$row['uname'];
$action=$row['action'];
?>
 <tr>
<th width="114px"><?php echo $sid; ?></th>
<th width="150px"><img src="../image/<?php echo $image; ?>"  width="50px" height="50px" style=" border-radius: 50px" position="absolute"/></th>
<th width="150px"><a href="studentdetails.php?pid=<?php echo $sid; ?>"><p style="color:black"><?php echo $name; ?></p></a></th>
<th width="150px"><?php echo $clsname; ?></th>
<th width="150px"><?php echo $mobile; ?></th>
<th width="140px"><?php echo $user; ?></th>
<th width="55px"><form method="post" action="edit.php" onclick="edit();">

<a href="editstdinfo.php?sid=<?php echo $sid; ?>" ><p style="color:green;">Edit</p></a></th>
<th width="140px">  


 <li class="dropdown">
    <a href="" class="dropbtn"><p style="color:#4CAF50">Result</p></a>
    <div class="dropdown-content">
      <a href="stdmid_result.php?std_id=<?php echo $sid; ?>"><p style="color:#4CAF50">Mid Result</p></a>
      <a href="stdfinal_result.php?std_id=<?php echo $sid; ?>"><p style="color:#4CAF50">Final Result</p></a>
	
   
    </div>
	</li>
    
    
    </th>




<th width="140px"><?php echo $action;  ?></th>


</tr>

<?php   }	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?>
</div>
</table></center>


<div id="footer">
 <?php include("footer/footer.php"); ?>

</div>



</div>
</body>
</html>