<?php
include("../database/config.php");
foreach($_POST['std_id'] as  $id=>$status){	

			$email=$_POST['email'][$id];
			$name=$_POST['firstname'][$id];
			$class=$_POST['class'][$id];
			$status=$_POST['status'][$id];

			$to=$email;
			$from="over.me2017@gmail.com";
            $subject="STUDENT DAILY ATTENDANCE INFORMATION";
            $header="Smart School ";
            $message="Dear Guardin <br> Your Student Alreay $status. Please Confirm.";
            $sentmail=mail($to, $subject, $message, $header);
            if($sentmail) {
                echo "<p> Student Status Information Send Successful.<br> Name:$name<br> Class:$class<br> Email:  $email <br></p>";
            }
            else {
				
				
                echo "<p>Cannot  send Student Status Information.<br> Name:$name<br> Class:$class<br> Email:  $email <br></p>";
			
			}


}
?>