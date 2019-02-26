<?php
include("login/session.php");

?>

<!DOCTYPE HTML>
<html>
<head>
<?php include("title/title.php"); ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script >

function validateForm() {
  
    var x1 = document.forms["photo"]["picname"].value;
    var x2 = document.forms["photo"]["file_img"].value;
    var x3 = document.forms["photo"]["pdesc"].value;

    if (x1 == "") {
        alert("Photo name must be filled out");
        return false;
            }
    else if(x2 =="")
        {
        alert("Photo upload must be filled out");
        return false;
            }
			 else if(x3 =="")
        {
        alert("Photo desc must be filled out");
        return false;
            }
        }
		
</script>

</head>
<body>
<div id="head" >
<?php include("header/header.php");   ?>

</div>
<div class="sidenav">
  <?php include("menu/menu.php"); ?>
</div>


<div  class="cont">

<h2><center>
<form id="photo" name="photo" method="post" action="photoinsert.php" enctype="multipart/form-data" onSubmit="return validateForm(); " >

    <div>Photo Name:</div>
    <input id="picname"  name="picname" type="text"  >

    <div>Photo Upload:</div>

      <input type="file" name="file_img" id="file_img" >


     <div>Photo Description:</div>

     <textarea name="pdesc" id="pdesc" rows="3" cols="40"></textarea>

    <div><input type="submit" name="btn_upload" button id="addnewphoto" value="Add new photo"   ></button> </div>
  </h2></center>
  </form>



<div id="footer">
<?php include("footer/footer.php");   ?>

</div></div>


 </body>
</html>



