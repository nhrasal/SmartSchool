<?php session_start();
include("../database/config.php");
if(isset($_POST['submit'])) {
	
	
   	$class=$_POST['cls_id'];
	$tchr=$_POST['tchr_id'];
        
        if($class || $tchr) {
				
            
            $sql1="SELECT * FROM courseinfo WHERE cls_id = '$class' AND tchr_id = '$tchr' ";
            $result1=mysqli_query($myconn, $sql1) or die(mysqli_error());
            if (mysqli_num_rows($result1) > 0) {
                $_SESSION['error']['date']="Course Already Taken.";
            }
        }
        else {
           
            $_SESSION['error']['date']="Course not taken.";
        }
   

 
    
    if(isset($_SESSION['error'])) {
		
        header("Location: addcourse.php");
        exit;
    }
	
	
	
    else {
$tid=$_POST['tchr_id'];
$sid=$_POST['cls_id'];
$crname=$_POST['coursename'];


include("../database/config.php");


$result="INSERT INTO courseinfo (tchr_id,cls_id,coursename)
VALUES('$tid','$sid','$crname')";


$query = mysqli_query($myconn,$result );



	

 if (mysqli_num_rows($query) > 0) {
                
	$_SESSION['error']['date']="Course  Insert Not Success.";
	
	}
else{
	
	$_SESSION['error']['date']="Course  Insert Success.";
	 
	
	}
	 
	 
	 
	 if(isset($_SESSION['error'])) {
        header("location:addcourse.php");
        exit;
    }

	}
}




?>