<?php


include("../database/config.php");

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($myconn, $_POST['uname']);
      $mypassword = mysqli_real_escape_string($myconn,(base64_encode($_POST['password']))); 
      
      $sql = "SELECT ad_id FROM admininfo WHERE uname = '$myusername' and password= '$mypassword' ";
	  
      $result = mysqli_query($myconn,$sql);
	  
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['ad_id'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  
         session_start("myusername");
         $_SESSION['uname'] = $myusername;
         
         header("location:../subadmin/index.php?ad_id= $active");
      }else {
         $_SESSION['error']['uname']="Username or Password Wrong";
		  header("location:../adminlogin.php");
      }
	  
   }
?>