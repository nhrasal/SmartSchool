<?php

include("../database/config.php");	
if(isset($_POST['submit'])) {
foreach($_POST['std_id'] as  $id=>$status){	
$atid=$_POST['atnd_id'][$id];
$status=$_POST['status'][$id];

$sql="UPDATE stdattendance SET status = '$status' WHERE stdattendance.atnd_id = '$atid'";
$query = mysqli_query($myconn, $sql);
}

 if (mysqli_num_rows($query) > 0) {
                
	$_SESSION['error']['date']="Attendance  Update Not Successful.";
	
	}
else{
	
	$_SESSION['error']['date']="Attendance  Update Successful.";
	 
	
	}
	 
	 
	 
	 if(isset($_SESSION['error'])) {
		$tid=$_GET['tchr_id'];
        header("Location: updateatt.php?tchr_id=$tid");
        exit;
    }


 
}



?>