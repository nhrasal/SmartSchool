<?php
include("login/session.php");

?>

<!DOCTYPE HTML>
<html>
<head>
<?php include("title/title.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
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
<h2>
<h3><p style="color:#111"><u>Welcome to Subadmin Create</u></p></h3>
<form id="aform" name="aform" method="post" action="subadmin/subadmininsert.php" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit?');" >

    <div> Admin Name:</div>
    <input id="snam"  name="aname" type="text" required  >

    <div>Address</div>
    <textarea id="add"  name="address" type="text"  required ></textarea>

    <div>Mobile Number</div>
    <input id="mnbr"  name="mnumber" type="int"  required >

    <div>Email</div>
    <input id="eml"  name="email" type="email" required  >

    <div> <label for="gender">Gender</label><br />
    <select id="gndr" name="gender"  required>
    <option value="male" name="">Select</option>
      <option value="male" name="gender">Male</option>
      <option value="female" name="gender">Female</option>
      <option value="others" name="gender">Others</option></select></div></br>


    <div>User Name</div>
    <input id="unm"  name="uname" type="text"  required >

    <div>Password</div>
    <input id="pass"  name="password" type="password"  required >


    <div>Photo Upload:</div>

      <input type="file" name="file_img" id="file_img"  required>


    <div><input type="submit" name="btn_upload" button id="addadmin" value="Submit"   ></button> </div>
  </h2></center>
  </form>
</div>

<div id="footer">
<?php include("footer/footer.php");   ?>




</div>
</div>



 </body>
</html>



