<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("../admin/title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.login {
    width: 200px;
    border-radius: 200px;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>


</head>

<body>
<div id="head" >
<?php include("../admin/header/header.php");   ?>

</div>
<div class="sidenav">
  <?php include("menu/menu.php"); ?>
</div>

<div  class="cont">
<center>

<h3><b><p style="color:#4CAF50; font-family:Algerian; font-size:25px;">Welcome to Admin Login System</p></b></h3>
<div class="imgcontainer">
    <img src="../image/login/login.jpg" alt="login" class="login">
  </div>


<form id="photo" name="login" method="post" action="../user/admincheck.php" onSubmit="return validateForm(); " >

<h2><div id="email">User name :</div>
<input id="uname" name="uname" type="text"  /><br />
<div id="pass">Password:</div>
<input id="pass" name="password" type="password" /><br />
<div>    <input type="submit" name="submit" value="Submit" /></div>
</center>
</h2>
</form>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</center>
</h2>
<div id="footer">
<?php include("../admin/footer/footer.php");   ?>
</div>



</div>
</body>
</html>