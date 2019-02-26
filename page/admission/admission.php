<?php
include("../../database/config.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("../../title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body>
<div id="head" >
<?php include("../../header/header.php");   ?>


</div>
<div id="menu">

<?php include("../../menu/menu.php");   ?>
</div>
<div id="sidbar">

<?php include("../../sidbar/sidbar.php");   ?>

</div>
<div  id="cont">
<center><form method="post" action="filter/filter.php">
<input type="search" name="pid" placeholder="search your image..." style="width:50%"/></form></center>


<center><table><tr>
<td>
<div id="form" > 
<div ><center><h3>School Admission Form</h3></center></div>

    <div> <label for="class">Class</label>
    <select id="class" name="class"required>
      <option value="one">One</option>
      <option value="two">Two</option>
      <option value="three">Three</option>
      <option value="four">Four</option>
      <option value="five">Five</option>
      <option value="six">Six</option>
	  <option value="seven">Seven</option>
      <option value="eight">Eight</option>
      <option value="nine">Nine</option>
      </select></div>
    
    
    <div><label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."required></div>

    <div><label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."required></div>
<div><label for="fname">Fathers Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your Fathers name.."required></div>
<div><label for="mname">Mothers Name</label>
    <input type="text" id="mname" name="firstname" placeholder="Your Mothers name.."required></div>




<div><label for="fname">Present Address</label>
    <input type="text" id="" name="" placeholder="Your Present Address.."required></div>
    
    
<div><label for="permanent">Permanent Address</label>
    <input type="text" id="" name="" placeholder="Your permanent Address.."required></div>
    
    
    
    
<div><label for="mnumber">Mobile Number</label>
    <input type="text" id="" name="" placeholder="Enter Your Mobile Number.."required></div>
      

       
   <div> <label for="gender">Gender</label>
    <select id="Gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="others">Others</option></select></div>
    
     <div><label for="religion">Religion</label>
    <select id="Religion" name="religion">
      <option value="islam">Islam</option>
      <option value="hidu">Hindu</option>
      <option value="Cristian">Cristian</option></select></div>
    

	<div><label for="dt">Date of Birth: </label>
	 <input name="" type="date" required> </div>


   <div> <label for="country">Country</label>
    <select id="country" name="country"  required>
      <option value="bangladesh">Bangladesh</option>
      <option value="india">India</option>
<option value="usa">USA</option></select></div>



    <div><form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"  required>
    <input type="submit" value="Submit"></form></div>
    </div>
 
<div><button type="button" class="cancelbtn">Cancel</button></div>

</td></tr></center>

<tr><td><div id="footer">
<?php include("../../footer/footer.php");   ?>
</div></tr></td>
</div>
</body>
</html>