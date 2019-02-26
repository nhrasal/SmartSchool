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
<div><form action="addsubadmin.php"><input type="submit" name="" value="Add Admin" /></form></div>

<center><table>
<center><p style="font-size:30px"><b>All Admin</b></p></center>
<tr><th width="114px">Admin ID</th>
<th width="150px">Admin Photo</th>
<th width="150px">Admin Name</th>
<th width="150px">Admin Contact</th>
<th width="140px">User Name</th>
<th width="55px">Edit</th>
<th width="75px">Delete</th>
<th width="100px">Message</th>
</tr>


<?php
include("../database/config.php");


$sql = "SELECT * FROM admininfo";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$aid=$row['ad_id'];

$image=$row['img_path'];
$name=$row['aname'];
$mobile=$row['mnumber'];
$user=$row['uname'];
?>

<tr><th width="114px"><?php echo $aid; ?></th>
<th width="150px"><img src="image/<?php echo $image; ?>"  width="50px" height="50px" position="absolute"/></th>
<th width="150px"><?php echo $name; ?></th>
<th width="150px"><?php echo $mobile; ?></th>
<th width="140px"><?php echo $user; ?></th>
<th width="55px"><form method="post" action="aedit.php" onclick="edit();">

<a href="adeditinfo.php?aid=<?php echo $aid; ?>" ><p style="color:green;">Edit</p></a></th>

<th width="75px"><form method="post" action="adeletenow.php" onclick="delete();">
<a href="delete/adeletenow.php?aid=<?php echo $aid; ?>" onclick="return confirm('Are you sure you want to Delete?');">
<p style="color:red;">Delete</p></a></th>

<th width="100px"><form method="post" action="adminmessage.php" onclick="delete();">
<a href="adminmessage.php?aid='.$aid.'" ><p style="color:blue;">Message</p></a></th>


</tr>


<?php   }	
} else {
    echo "0 results";
}


mysqli_close($myconn);
?>
</table></center>
<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>