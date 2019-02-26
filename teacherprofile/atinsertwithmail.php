<?php session_start();
include("../database/config.php");
if(isset($_POST['submit'])) {
   
        //whether the email format is correct
        if(date("Y-m-d")) {
            //if it has the correct format whether the email has already exist
            $date=date("Y-m-d");
            $sql1="SELECT * FROM stdattendance WHERE date = '$date'";
            $result1=mysqli_query($myconn, $sql1) or die(mysqli_error());
            if (mysqli_num_rows($result1) > 0) {
                $_SESSION['error']['date']="attendance already taken.";
            }
        }
        else {
            //this error will set if the email format is not correct
            $_SESSION['error']['date']="Your email is not valid.";
        }
   

 
    //if the error exist, we will go to registration form
    if(isset($_SESSION['error'])) {
		$tid=$_GET['tchr_id'];
        header("Location: getattendance.php?tchr_id=$tid");
        exit;
    }
	
	
	
    else {
	foreach($_POST['std_id'] as  $id=>$status){			
	
$tid=$_GET['tchr_id'];
$stdid=$_POST['std_id'][$id];
$classes=$_POST['class'][$id];
$fname=$_POST['firstname'][$id];
$date=date("Y-m-d");
$status=$_POST['status'][$id];


$result="INSERT INTO stdattendance(std_id,tchr_id,class,firstname,date,status)
VALUES('$stdid','$tid','$classes','$fname','$date','$status')";


$query = mysqli_query($myconn,$result );

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
     echo "error $name";
     }
     else{
         echo "Form submitted successfully! Press back $emailtosend";
}


		
}


    }
}



?>

// <?php 
{
            $to=$email;
			$from = "over.me2017@gmail.com";
            $subject="Confirmation from TutsforWeb to $fname";
            $header="TutsforWeb: Confirmation from TutsforWeb";
            $message="Please click the link below to verify and activate your account.";
           
            $sentmail=mail($to, $subject, $message, $header);
            if($sentmail) {
                echo "Your Confirmation link Has Been Sent To Your Email Address.";
            }
            else {
                echo "Cannot send Confirmation link to your e-mail address $email";
            }
        }
if($query) 
		?>