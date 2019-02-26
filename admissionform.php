<?php 

?>

<div ><center><h3>School Admission Form</h3></center></div>

    <div> <label for="class">Class</label></br>
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
      </select></div></br>
    
    
    <div><label for="fname">First Name</label></br>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."required></div></br>

    <div><label for="lname">Last Name</label></br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."required></div></br>
<div><label for="fname">Fathers Name</label></br>
    <input type="text" id="fname" name="firstname" placeholder="Your Fathers name.."required></div></br>
<div><label for="mname">Mothers Name</label></br>
    <input type="text" id="mname" name="firstname" placeholder="Your Mothers name.."required></div></br>




<div><label for="fname">Present Address</label></br>
    <input type="text" id="" name="" placeholder="Your Present Address.."required></div></br>
    
    
<div><label for="permanent">Permanent Address</label></br>
    <input type="text" id="" name="" placeholder="Your permanent Address.."required></div></br>
    
    
    
    
<div><label for="mnumber">Mobile Number</label></br>
    <input type="text" id="" name="" placeholder="Enter Your Mobile Number.."required></div></br>
      

       
   <div> <label for="gender">Gender</label>
    <select id="Gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="others">Others</option></select></div></br>
    
     <div><label for="religion">Religion</label></br>
    <select id="Religion" name="religion">
      <option value="islam">Islam</option>
      <option value="hidu">Hindu</option>
      <option value="Cristian">Cristian</option></select></div></br>
    

	<div><label for="dt">Date of Birth: </label></br>
	 <input name="" type="date" required> </div></br>


   <div> <label for="country">Country</label>
    <select id="country" name="country"  required>
      <option value="bangladesh">Bangladesh</option>
      <option value="india">India</option>
<option value="usa">USA</option></select></div></br>



    <div><form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"  required>
    </div>
    
    <div><input type="submit" value="Submit"></form></div>
    
 
<div><button type="button" class="cancelbtn">Cancel</button></div></br>

</td></tr></center>
</table></div></div></div>

