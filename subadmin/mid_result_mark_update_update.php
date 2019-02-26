<?php

include("../database/config.php");	
if(isset($_POST['submit'])) {
foreach($_POST['rslt_id'] as  $id=>$status){	
$rslt=$_POST['rslt_id'][$id];
$mark=$_POST['midexam'][$id];

$sql="UPDATE midresult SET midexam = '$mark' WHERE midresult.rslt_id = '$rslt'";
$query = mysqli_query($myconn, $sql);
}

 if (mysqli_num_rows($query) > 0) {
                
	$_SESSION['error']['date']="Mid Term Result  Update Not Successful.";
	
	}
else{
	
	$_SESSION['error']['date']="Mid Term  Result  Update Successful.";
	 
	
	}
	 
	 
	 
	 if(isset($_SESSION['error'])) {
        header("Location: select_exam_result_update.php");
        exit;
    }


 
}



?>