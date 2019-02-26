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
<div><form action="addteacher.php"><input type="submit" name="" value="Add Teacher" /></form></div>
<center><table width="80%">
<div class="polaroid">
<p style="font-size:30px"><b>All Teacher</b></p>
 <tr>
<th  width="50px">Id</th>
<th width="173px">Teacher Photo</th>
<th width="165px">Teacher Name</th>

<th width="105px">Contact</th>
<th width="135px"> User Name</th>
<th width="135px">Action</th>
<th width="55px">Edit</th>
<th width="75px">Delete</th>


</tr>

<?php
include("../database/config.php");


$sql = "SELECT * FROM teacherinfo ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {

     while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['tchr_id'];

$image=$row['img_path'];
$name=$row['tname'];
$mobile=$row['mnumber'];
$user=$row['uname'];
$action=$row['action'];
?>

<tr>
<th width="50px"><?php echo $tid; ?></th>

<th width="170px"><img src="../admin/image/<?php echo $image; ?>"  width="50px" height="50px" position="absolute"/></th>
<th width="170px"><a href="tdetails.php?tchr_id=<?php echo $tid; ?> "><p style="color:black"><?php echo $name; ?></p></a></th>
<th width="80px"><?php echo $mobile; ?></th>
<th width="110px"><?php echo $user; ?></th>
<th width="110px"><?php echo $action; ?></th>
<th width="60px"><form method="post" action="tedit.php" onclick="edit();">

<a href="teditinfo.php?tid=<?php echo $tid; ?>" ><p style="color:green;">Edit</p></a></th>


<th width="70px"><form method="post" action="tdeletenow.php">
<a href="delete/tdeletenow.php?tchr_id=<?php echo $tid; ?> " onclick="return confirm('Are you sure you want to Delete?');" ><p style="color:red;">Delete</p></a></th>
</tr>


<?php   }	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?></table>
</table></center>
<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>