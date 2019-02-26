<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("title/title.php");   ?>
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

body {margin:25px;}

div.polaroid {
  width:50%;
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


<center>

<div class="polaroid">
<h3><b><p style="color:black; font-family:Algerian; font-size:25px;">Welcome to Supper Admin Login System</p></b></h3>
<div class="imgcontainer">
    <img src="../image/login/login.jpg" alt="login" class="login">



<h2>
<?php

if(isset($_SESSION['error']))
{

echo '<h2><p style="color:red">'.$_SESSION['error']['uname'].'</p></h2>';

unset($_SESSION['error']);
}
?>
<form id="forms" name="login" action="login/admincheck.php" method="post" >
<div id="name" ">User name :</div>
<input  name="name" id="name" type="text"  placeholder="Enter Your User Name.." required/><br />
<div id="pass"  >Password :</div>
<input name="pass" id="pass" type="password"  placeholder="Enter Your Password.."  required/><br />
<input type="submit" value="Submit" />
</form></center>
</h2>
</div>




</div>
</body>
</html>