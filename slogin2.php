<?php

session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script >
function validateForm() {
  
    var x1 = document.forms["login"]["name"].value;
    var x2 = document.forms["login"]["pass"].value;
	
  

    if (x1 == "") {
        alert("user name must be filled out");
        return false;
            }
    else if(x2 =="")
        {
        alert("Password must be filled out");
        return false;
            }
		
			
        }
		</script>
<script src="script/vali.js"></script>
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
<div id="header">
<?php include("top/topheader.php"); ?>
</div>

</div>
<div id="menu">
<?php include("menu/menu.php");   ?>

</div>

<div  id="cont"><center>

<h3><b><p style="color:#4CAF50; font-family:Algerian; font-size:25px;">Welcome to Student Login System</p></b></h3>
<div class="imgcontainer">
    <img src="image/login/login.jpg" alt="login" class="login">
  </div>

<h3><p style="color:#F00">your Login information wrong </p></h3>
<form id="photo" name="login" method="post" action="user/studentcheck.php" onSubmit="return validateForm(); " >

<h2><div id="uname">User name :</div>
<input id="name" name="uname" type="text"  /><br />
<div id="pass">Password:</div>
<input id="pass" name="password" type="password" /><br />
<div>    <input type="submit" name="submit" value="Submit" /></div>
</center>
</h2>
</form>


<div id="footer">
<?php include("footer/footer2.php");   ?>
<div id="footer2">
<?php include("footer/footer.php");   ?>
</div>
</div>
</div>
</body>
</html>