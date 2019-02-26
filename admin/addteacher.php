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
<div  class="form">

<table>
<h3><b><u>Add a new Teacher information</u></b> </h3>
<br>

<h4>
<form id="tform" name="tform" method="post" action="teacherinsert.php" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit?');" >
    <div>Teachers Name:</div>
    <input id="tnam"  name="tname" type="text" required  >
    
  
    <div>Fathers Name</div>
    <input id="tfnam"  name="tfname" type="text" required  >

    <div>Address</div>
    <textarea id="add"  name="address" type="text" required  ></textarea>

    <div>Mobile Number</div>
    <input id="mnbr"  name="mnumber" max="15" min="9" type="int" required  >

    <div>Email</div>
    <input id="eml"  name="email" type="email" required  >

    <div> <label for="gender">Gender</label><br />
    <select id="gndr" name="gender"  required>
    <option value="" name="gender">Select</option>
      <option value="male" name="gender">Male</option>
      <option value="female" name="gender">Female</option>
      <option value="others" name="gender">Others</option></select></div></br>
      

     <div>Education Qualification</div>
    <textarea id="edqf"  name="eduqf" type="text" required  ></textarea>

    <div>User Name</div>
    <input id="unm"  name="uname" type="text"  required >

    <div>Password</div>
    <input id="pass"  name="password" type="password"  required >


    <div>Photo Upload:</div>

      <input type="file" name="file_img" id="file_img" required >


    <div><input type="submit" name="btn_upload"  value="Submit"   ></button> </div>
  </h4></center>
  </form>


<div id="footer">
<?php include("footer/footer.php");   ?>




</div>
</div>



 </body>
</html>



