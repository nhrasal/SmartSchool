
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="script/vali.js"></script>
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
<table>
<form id="" name="" method="POST" action="forminsert.php" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit?');" >


<div><center><h3>School Admission Form</h3></center></div>
<h3><p style="color:#0F0"> Success full request</p></h3>

    <div> <label for="class">Class</label><br />
    <select id="clas" name="class"  required>
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
    
    
    <div><label for="firstname">First Name</label></br>
    <input type="text" id="fname" name="firstname" style="text-transform:uppercase" placeholder="Your name.."required></div></br>

    <div><label for="lname">Last Name</label></br>
    <input type="text" id="lname" name="lastname" style="text-transform:uppercase" placeholder="Your last name.."required></div></br>
    
<div><label for="lastname">Fathers Name</label></br>
    <input type="text" id="faname" name="fathersname" style="text-transform:uppercase" placeholder="Your Fathers name.."required></div></br>
    
<div><label for="mname">Mothers Name</label></br>
    <input type="text" id="moname" name="mothersname" style="text-transform:uppercase" placeholder="Your Mothers name.."required></div></br>


<div><label for="fname">Present Address</label></br>
    <textarea rows="3" cols="40" id="preadd" name="preadds" style="text-transform:uppercase" placeholder="Your Present Address.."required></textarea></div></br>
    
    
<div><label for="permanent">Permanent Address</label></br>
    <textarea rows="3" cols="40" id="peradd" name="peradds" style="text-transform:uppercase" placeholder="Your Permanent Address.."required></textarea></div></br> 


  </div></br>
    
    
    
    
<div><label for="mnumber">Mobile Number</label></br>
    <input type="int" id="mnumber" name="monumber" placeholder="Enter Your Mobile Number.."required></div></br>
      

<div><label for="mname">Email</label></br>
    <input type="email" id="eml" name="email" placeholder="Your Email  name.."required></div></br>


 <div> <label for="gender">Gender</label><br />
    <select id="gndr" name="gender"  required>
    <option value="">Select</option>
      <option value="male" name="gender">Male</option>
      <option value="female" name="gender">Female</option>
      <option value="others"name="gender">Others</option></select></div></br>

 <div> <label for="religion">Religion</label><br />
    <select id="relg" name="religion"  required>
       <option value="">Select</option>
      <option value="islam" name="religion" >Islam</option>
      <option value="hindu" name="religion">Hindu</option>
      <option value="chirestan" name="religion">Chirestan</option></select></div></br>
    

    <div><label for="dt">Date of Birth: </label></br>
   <input name="dofb" id="dofB" type="date" required> </div></br>


   <div> <label for="country">Country</label><br />
    <select id="cntry" name="country"  required>
       <option value="">select</option>
      <option value="bangladesh">Bangladesh</option>
      <option value="india">India</option>
<option value="usa">USA</option></select></div></br>
    
    

  <div>Photo Upload:</div>

<input type="file" name="file_img" id="file_img" placeholder="Enter Your Photo.."required >

    <div><input type="submit" name="btn_upload" button id="submit" value="Submit"   ></div>
    
</center>
</form></table>

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
