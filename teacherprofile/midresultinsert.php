<?php session_start();
include("../database/config.php");
if(isset($_POST['submit'])) {
	
	
   	$course=$_POST['course_id'];
        
        if($course ) {
            $sql1="SELECT * FROM midresult WHERE  course_id = '$course'";
            $result1=mysqli_query($myconn, $sql1) or die(mysqli_error());
            if (mysqli_num_rows($result1) > 0) {
                $_SESSION['error']['date']="Result Already Publish.";
            }
        }
        else {
           
            $_SESSION['error']['date']="Resul Not publish.";
        }
   

 
    
    if(isset($_SESSION['error'])) {
		$tid=$_GET['tchr_id'];
        header("Location: midpublish.php?tchr_id=$tid");
        exit;
    }
	
	
	
    else {
		
	foreach($_POST['std_id'] as  $id=>$status){			
	
$tid=$_GET['tchr_id'];
$stdid=$_POST['std_id'][$id];
$classes=$_POST['cls_id'][$id];
$fname=$_POST['firstname'][$id];
$date=date("Y-m-d");
$midexam=$_POST['midexam'][$id];
$crs=$_POST['course'];
$crsid=$_POST['course_id'];


$result="INSERT INTO midresult(std_id,tchr_id,cls_id,course,course_id,firstname,date,midexam)
VALUES('$stdid','$tid','$classes','$crs','$crsid','$fname','$date','$midexam')";


$query = mysqli_query($myconn,$result );

}
 if (mysqli_num_rows($query) > 0) {
                
	$_SESSION['error']['date']="Mid Result Publish Not Success.";
	
	}
else{
	
	$_SESSION['error']['date']="Mid  Result Publish Success.";
	 
	
	}
	 
	 
	 
	 if(isset($_SESSION['error'])) {
		$tid=$_GET['tchr_id'];
        header("Location: midresultsend.php?tchr_id=$tid");
        exit;
    }
		



    }
}



?>