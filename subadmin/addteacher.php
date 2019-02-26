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
<h4><center>
<form id="tform" name="tform" method="post" action="teacherinsert.php" enctype="multipart/form-data" onSubmit="return validateForm(); " >
    <div>Teachers Name:</div>
    <input id="tnam"  name="tname" type="text"  >
    
       <div> <label for="class">Class</label><br />
    <select id="clas" name="class1"  required>
       <option value="">Select</option>
      <option value="one">One</option>
      <option value="two">Two</option>
      <option value="three">Three</option>
      <option value="four">Four</option>
      <option value="five">Five</option>
      <option value="six">Six</option>
	  <option value="seven">Seven</option>
      <option value="eight">Eight</option>
      <option value="nine">Nine</option>
      </select></div></br>
      <div>Subject 1</div>
      
    <input id="course"  name="course1" type="text"  >
    
     <div> <label for="class">Class</label><br />
    <select id="clas" name="class2"  required>
       <option value="">Select</option>
      <option value="one">One</option>
      <option value="two">Two</option>
      <option value="three">Three</option>
      <option value="four">Four</option>
      <option value="five">Five</option>
      <option value="six">Six</option>
	  <option value="seven">Seven</option>
      <option value="eight">Eight</option>
      <option value="nine">Nine</option>
      </select></div></br>
      <div>Subject2</div>
      
    <input id="course"  name="course2" type="text"  >
    <div>Fathers Name</div>
    <input id="tfnam"  name="tfname" type="text"  >

    <div>Address</div>
    <textarea id="add"  name="address" type="text"  ></textarea>

    <div>Mobile Number</div>
    <input id="mnbr"  name="mnumber" type="int"  >

    <div>Email</div>
    <input id="eml"  name="email" type="email"  >

    <div> <label for="gender">Gender</label><br />
    <select id="gndr" name="gender"  required>
      <option value="male" name="gender">Male</option>
      <option value="female" name="gender">Female</option>
      <option value="others" name="gender">Others</option></select></div></br>
      

     <div>Education Qualification</div>
    <textarea id="edqf"  name="eduqf" type="text"  ></textarea>

    <div>User Name</div>
    <input id="unm"  name="uname" type="text"  >

    <div>Password</div>
    <input id="pass"  name="password" type="password"  >


    <div>Photo Upload:</div>

      <input type="file" name="file_img" id="file_img" >


    <div><input type="submit" name="btn_upload" button id="addnewphoto" value="Submit"   ></button> </div>
  </h4></center>
  </form>


<div id="footer">
<?php include("footer/footer.php");   ?>




</div>
</div>



 </body>
</html>



