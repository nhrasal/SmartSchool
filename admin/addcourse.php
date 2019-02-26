<?php
include("login/session.php");

?>

<!DOCTYPE HTML>
<html>
<head>

<style>
body {margin:25px;}

div.form {
  width:70%;
  background-color: #f2f2f2f2;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
</style>
<?php include("title/title.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div id="head" >
<?php include("header/header.php");   ?>

</div>
<div class="sidenav">
  <?php include("menu/menu.php"); ?>
</div>

<div  class="cont">
<center>
 <?php

if(isset($_SESSION['error']))
{
error_reporting(0);
echo '<p>'.$_SESSION['error']['date'].'</p>';
echo '<p>'.$_SESSION['error']['email'].'</p>';

unset($_SESSION['error']);
}
?>

<table>
<h3><b><u>Add a new Course information</u></b> </h3>
<br>

<h4>
<form id="tform" name="tform" method="post" action="course_insert.php" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit?');" >
   
   
    <div> <label for="class">Course Class</label><br />
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



?></select></div></br>
    
  
      
    <div> <label for="class">Course Teacher</label><br />
    <select id="clas" name="tchr_id"  required>
    <option value="">Select</option></br>
    <?php



include("../database/config.php");


$sql = "SELECT * FROM teacherinfo ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['tchr_id'];
	$name=$row['tname'];

?>

<option value="<?php echo $tid; ?>"><?php echo $tid; ?>-<?php echo $name; ?></option>

<?php

	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?></select></div><br>

    <div>Course Name</div>
    <input id="name"  name="coursename" type="text"  >
    
    <div><input type="submit" name="submit"  value="Add Course"   ></button> </div>
  </h4></center>
  </form>


<div id="footer">
<?php include("footer/footer.php");   ?>




</div>
</div>



 </body>
</html>



