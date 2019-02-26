<?php session_start();
include("../database/config.php");
if(isset($_POST['submit'])) {
	
	
   	$class=$_POST['clsname'];
	
        
        if($class ) {
				
            
            $sql1="SELECT * FROM classinfo WHERE clsname = '$class'";
            $result1=mysqli_query($myconn, $sql1) or die(mysqli_error());
            if (mysqli_num_rows($result1) > 0) {
                $_SESSION['error']['date']="Class Already Taken.";
            }
        }
        else {
           
            $_SESSION['error']['date']="Class not taken.";
        }
   

 
    
    if(isset($_SESSION['error'])) {
		
        header("Location: addclass.php");
        exit;
    }
	
	
	
    else {

$cls=$_POST['cls_id'];
$clsname=$_POST['clsname'];


include("../database/config.php");


$result="INSERT INTO classinfo (cls_id,clsname)
VALUES('$cls','$clsname')";


$query = mysqli_query($myconn,$result );



	

 if (mysqli_num_rows($query) > 0) {
                
	$_SESSION['error']['date']="Class  Insert Not  Success.";
	
	}
else{
	
	$_SESSION['error']['date']="Class  Insert  Success.";
	 
	
	}
	 
	 
	 
	 if(isset($_SESSION['error'])) {
        header("location:addclass.php");
        exit;
    }

	}
}




?>