<?php
 include("../database/config.php");
 session_start();
   
   $user_check = $_SESSION['uname'];
   
   $result ="select uname from admininfo where username = '$user_check' ";
   
   $query = mysqli_query($myconn,$result );
   
   
   if(!isset($_SESSION['uname'])){
      header("location:../adminlogin.php");
   }
?>