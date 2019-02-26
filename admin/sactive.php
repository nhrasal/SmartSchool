<?php

include("../database/config.php");	
$rslt=$_GET['std_id'];


$sql="UPDATE admissionform SET action = 'active' WHERE admissionform.std_id = '$rslt'";
$query = mysqli_query($myconn, $sql);


 if ($query==true ) {
                
	echo"Active successfull";
	header("location:admission.php");
	
	}
else{
	
	echo"Not sucess";
	 
	
	}
	 



?>