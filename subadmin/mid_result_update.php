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
<table width="80%">

<center>
<div><span style="font-size:24px">Mid Term Exam Result Update System</span><br /> </div><br />
<br />
<br />

<form id="" name="" method="POST" action="mid_result_mark_update.php" enctype="multipart/form-data">

<div> <label for="class"><span style="font-size:18px; color:#666">Select Class</span></label><br />
    <select id="clas" name="cls_id"  required>
    <option value="">Select</option></br>
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



?></select></div>


</br>
    
      <input type="submit" class="btn primary" id="" value="Submit" /></div>
      </form>



</table>



<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>