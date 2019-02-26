<?php

include("../database/config.php");

$tid=$_GET['tchr_id'];

$date=date("Y-m-d");
$value="absent";

$sendsql = "SELECT * FROM admissionform INNER JOIN stdattendance ON admissionform.std_id= stdattendance.std_id AND tchr_id='$tid' AND date='$date' AND status='$value' ";
$sendquery = mysqli_query($myconn, $sendsql);

$sendrow = mysqli_fetch_array ($sendquery);
    $emailtosend = $sendrow['email'];
	$name=$sendrow['firstname'];
	$class=$sendrow['class'];

    $to="$emailtosend ";
    $from = "over.me2017@gmail.com";
    $subject="Send Student Attendance Information Status!";
    $message="your Student already absent!$name, $class ";
    $headers = "From: $from\n";
	
     mail($to, $subject, $message, $headers);

     if (!mail($to, $subject, $message,  $headers)){
     echo "error $emailtosend";
     }
     else{
         echo "Form submitted successfully! Press back $emailtosend";
}


?>