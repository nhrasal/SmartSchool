<?php

include("../database/config.php");	
if(isset($_POST['submit'])) {
foreach($_POST['rslt_id'] as  $id=>$status){	
$rslt=$_POST['rslt_id'][$id];
$mark=$_POST['finalexam'][$id];

$sql="UPDATE finalresult SET finalexam = '$mark' WHERE finalresult.rslt_id = '$rslt'";
$query = mysqli_query($myconn, $sql);
}

 if (mysqli_num_rows($query) > 0) {
                
	$_SESSION['error']['date']="Final Term Result  Update Not Successful.";
	
	}
else{
	
	$_SESSION['error']['date']="Final Term  Result  Update Successful.";
	 
	
	}
	 
	 
	 
	 if(isset($_SESSION['error'])) {
        header("Location: select_exam_result_update.php");
        exit;
    }


 
}



?>