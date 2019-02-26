<?php session_start();
include("../database/config.php");
if(isset($_POST['submit'])) {
	
	
   	$class=$_POST['course_id'];
        
        if($class ) {
				
            $date=date("Y-m-d");
            $sql1="SELECT * FROM stdattendance WHERE date = '$date' AND course_id = '$class'";
            $result1=mysqli_query($myconn, $sql1) or die(mysqli_error());
            if (mysqli_num_rows($result1) > 0) {
                $_SESSION['error']['date']="Attendance Already Taken.";
            }
        }
        else {
           
            $_SESSION['error']['date']="Attendance not taken.";
        }
   

 
    
    if(isset($_SESSION['error'])) {
		$tid=$_GET['tchr_id'];
        header("Location: getattendance.php?tchr_id=$tid");
        exit;
    }
	
	
	
    else {
		
	foreach($_POST['std_id'] as  $id=>$status){			
	
$tid=$_GET['tchr_id'];
$stdid=$_POST['std_id'][$id];
$classes=$_POST['cls_id'][$id];
$fname=$_POST['firstname'][$id];
$date=date("Y-m-d");
$status=$_POST['status'][$id];
$crs=$_POST['course'];
$crsid=$_POST['course_id'];


$result="INSERT INTO stdattendance(std_id,tchr_id,cls_id,course,course_id,firstname,date,status)
VALUES('$stdid','$tid','$classes','$crs','$crsid','$fname','$date','$status')";


$query = mysqli_query($myconn,$result );


		
}

 if (mysqli_num_rows($query) > 0) {
                
	$_SESSION['error']['date']="Attendance  Insert Not Success.";
	
	}
else{
	
	$_SESSION['error']['date']="Attendance  Insert Success.";
	 
	
	}
	 
	 
	 
	 if(isset($_SESSION['error'])) {
		$tid=$_GET['tchr_id'];
        header("Location: mailstudent.php?tchr_id=$tid");
        exit;
    }


    }
}



?>