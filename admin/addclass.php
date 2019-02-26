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
<h3><b><u>Add a new Class</u></b> </h3>
<br>

<h4>
<form id="tform" name="tform" method="post" action="cls_insert.php" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit?');" >
   
   
    
    <div>Clas Name</div>
    <input id="name"  name="clsname" type="text"  >
    
    <div><input type="submit" name="submit"  value="Add Class"   ></button> </div>
  </h4></center>
  </form>


<div id="footer">
<?php include("footer/footer.php");   ?>




</div>
</div>



 </body>
</html>



