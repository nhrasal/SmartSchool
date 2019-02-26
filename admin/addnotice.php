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
<h3><b><u>Add Notice </u></b> </h3>
<br>

<h4>
<form method="post" action="notice_insert.php" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit?');" >
   
      
    <div> <label>Notice Catagory </label><br />
    <select id="clas" name="notice_ctgry"  required>
    <option value="">Select</option></br>
<option value="Sidbar">Sidbar Notice</option>
<option value="Marquee">Marquee Notice</option>
<option value="noticeb">Notice Board</option>
</select></div><br>

    <div>Notice Title</div>
    <input id="name"  name="notice_title" type="text"  >
    <div>Notice Description</div>
    <textarea id="name"  name="notice_des" type="text"  ></textarea>
    <div>Photo Upload:</div>

      <input type="file" name="file_img" id="file_img" >
    
    <div><input type="submit" name="btn_upload"  value="Add Notice"   ></button> </div>
  </h4></center>
  </form>

</div>



 </body>
</html>



