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
<?php

include("login/session.php");
$sid=$_REQUEST['std_id'];


$sql = "SELECT * FROM admissionform WHERE std_id='$sid' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$sid=$row['std_id'];
	
}}?>
 

<div  class="cont">


	
<h2><center>
<form id="photo" name="photo" method="post" action="messageinsert.php?std_id=<?php echo $sid; ?>" enctype="multipart/form-data" onSubmit="return confirm('Are you sure?');" >


<div>

    <input type="hidden" id="message" value="<?php echo $sid; ?>"  name="std_id" type="text"  ></div>

    <div>Message Title</div>
    <input id="message"  name="message" type="text"  >


     <div>Description:</div>

     <textarea name="messaged" id="messaged" rows="3" cols="40"></textarea>
     <div>Photo:</div>

      <input type="file" name="file_img" id="file_img" >

    <div><input type="submit" name="btn_upload" button id="submit" value="Send"   ></button> </div>
  </h2></center>
  </form>
  
<div id="footer">
<?php include("footer/footer.php");   ?>





</div>
</div>



 </body>
</html>



