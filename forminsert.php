<?php session_start();
include("database/config.php");
if(isset($_POST['btn_upload'])) {
    if($_POST['email']=='') {
        $_SESSION['error']['email']="E-mail is required.";
    }
    else {
        //whether the email format is correct
        if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) {
            //if it has the correct format whether the email has already exist
            $email=$_POST['email'];
            $sql1="SELECT * FROM admissionform WHERE email = '$email'";
            $result1=mysqli_query($myconn, $sql1) or die(mysqli_error());
            if (mysqli_num_rows($result1) > 0) {
                $_SESSION['error']['email']="This Email is already used.";
            }
        }
        else {
            //this error will set if the email format is not correct
            $_SESSION['error']['email']="Your email is not valid.";
        }
    }

 
    //if the error exist, we will go to registration form
    if(isset($_SESSION['error'])) {
        header("Location: form.php");
        exit;
    }
    else {
		
	$filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "image/".$filename;

    move_uploaded_file($filetmp,$filepath);


$classes=$_POST['cls_id'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$faname=$_POST['fathersname'];
$moname=$_POST['mothersname'];
$preadd=$_POST['preadds'];
$peradd=$_POST['peradds'];
$mnumber=$_POST['monumber'];
$eml=$_POST['email'];
$gndr=$_POST['gender'];
$relg=$_POST['religion'];
$dofB=$_POST['dofb'];
$cntry=$_POST['country'];
$uname=$_POST['uname'];
$pass=base64_encode($_POST['password']);
$action="new";
$com_code=md5(uniqid(rand()));

$result="INSERT INTO admissionform(cls_id,firstname,lastname,fathersname,mothersname,preadds,peradds,monumber,email,gender,religion,dofb,country,uname,password,com_code,action,img_name,img_path,img_type)
VALUES('$classes','$fname','$lname','$faname','$moname','$preadd','$peradd','$mnumber','$eml','$gndr','$relg','$dofB','$cntry','$uname','$pass','$com_code','$action','$filetmp','$filename','$filetype')";

			


$query = mysqli_query($myconn,$result )or die(mysqli_error());


if($query)
{			
				
		require 'PHPMailermaster/PHPMailerAutoload.php';	
    $mailto = $_POST['email'];
	$name = $_POST['firstname'];
	$class = $_POST['cls_id'];
	$date=date("Y-m-d");
    $mailSub = "Smart School";
    $mailMsg = "
<div>
<h1>Smart School</h1>
<p>Dear Guardian,<br>
Plese Varification Your Student Name:$name Class: $class..<br>
 Click Here: http://localhost/school/confirm.php?passkey=$com_code
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
	   $_SESSION['error']['admissionse']="Admission Successfull <br> Check You Email is $eml";
	header("location:admissionscs.php");
   }


			
			
	
}
else {
	echo"insert Is not successfull";
	
	}

    }
}

?>