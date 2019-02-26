<?php

require 'PHPMailermaster/PHPMailerAutoload.php';
foreach($_POST['std_id'] as  $id=>$email){	
     $mailto = $_POST['email'][$id];
	$name = $_POST['firstname'][$id];
	$class = $_POST['cls_id'][$id];
	$mark = $_POST['result'][$id];
	$cors = $_POST['course'][$id];
	$grade = $_POST['grade'][$id];
	$date=date("D-m-y");
    $mailSub = "Smart School";
    $mailMsg = "
<div>
<h1>Smart School</h1>
<p>Dear Guardian,<br>
Your Student <b>$name<b/> Final term Exam Result Already Published  . please confirm...<br>
Name: $name<br>
Class:$class<br>
Course:$cors<br>
Result:$mark<br>
Grad:$grade<br>
Thank you<br>
</p>
</div>
"; 
   
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail->WordWrap = 50;
   $mail ->Username = "smartschoolsystem2018@gmail.com";
   $mail ->Password = "rasalcse35";
   $mail ->SetFrom("smartschoolsystem2018@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);
   

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
	   include("../database/config.php");

$tid=$_GET['tchr_id'];

       $_SESSION['error']['email']="Attendance Insert And Status Sent Successfull.";
	   header("location:getattendance.php?tchr_id=$tid");
   }

}


   

