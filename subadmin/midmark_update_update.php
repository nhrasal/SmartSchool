<?php

include("../database/config.php");	
if(isset($_POST['submit'])) {
$rslt=$_POST['rslt_id'];
$mark=$_POST['midexam'];

$sql="UPDATE midresult SET midexam = '$mark' WHERE midresult.rslt_id = '$rslt'";
$query = mysqli_query($myconn, $sql);
}

 if (mysqli_num_rows($query) > 0) {
                
	$_SESSION['error']['x']="Mid Term Result  Update Not Successful.";
	
	}
else{
	
	$_SESSION['error']['y']="Mid Term  Result  Update Successful.";
	 
	
	}
	 
	 
	 
	 if(isset($_SESSION['error'])) {
        header("Location:select_exam_result_update.php");
        exit;
    }





?>