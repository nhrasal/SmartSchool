<?php


include("../database/config.php");

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	   
	   
	      
	   $class=$_POST['uname'];
        
        if($class) {
				
            
            $sql1="SELECT * FROM teacherinfo WHERE uname = '$class' AND action='deactive' ";
            $result1=mysqli_query($myconn, $sql1) or die(mysqli_error());
            if (mysqli_num_rows($result1) > 0) {
                $_SESSION['error']['uname']="Your Account Deactive.";
            }
        }
        else {
           
            $_SESSION['error']['date']="Information wrong.";
        }
   

 
    
    if(isset($_SESSION['error'])) {
		
        header("Location: ../tlogin.php");
        exit;
    }
	else{
	   
	   
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($myconn, $_POST['uname']);
      $mypassword = mysqli_real_escape_string($myconn,(base64_encode($_POST['password']))); 
      
      $sql = "SELECT tchr_id FROM teacherinfo WHERE uname = '$myusername' and password= '$mypassword' ";
	  
      $result = mysqli_query($myconn,$sql);
	  
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['tchr_id'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  $_SESSION['error']['uname']="Welcome to Teacher Administration";
		  header("location:../teacherprofile/index.php");
		  
         session_start("myusername");
         $_SESSION['uname'] = $myusername;
         
         header("location:../teacherprofile/index.php?tchr_id= $active");
      }else {
         $_SESSION['error']['uname']="Username or Password Wrong";
		  header("location:../tlogin.php");
      }
	  
   }
   }
?>