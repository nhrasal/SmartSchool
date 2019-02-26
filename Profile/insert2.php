<?php
include("../database/config.php");
if(isset($_POST['submit']))
{
	
	
if(date("Y-m-d")==''){
		$date=date("Y-m-d");
		$result1="SELCET * FROM stdattendance WHERE date='$date' ";
		$query1 = mysqli_query($myconn,$result1 );
		if (!mysqli_query($query1)) {
        echo"attendance already taken ";
    }
	
	
	else{
		
		foreach($_POST['std_id'] as  $id=>$status){	
	
$tid=$_GET['tchr_id'];
$stdid=$_POST['std_id'][$id];
$classes=$_POST['class'][$id];
$fname=$_POST['firstname'][$id];
$date=date("Y-m-d");
$status=$_POST['status'][$id];


$result="INSERT INTO stdattendance(std_id,tchr_id,class,firstname,date,status)
VALUES('$stdid','$tid','$classes','$fname','$date','$status')";


$query = mysqli_query($myconn,$result );
header("location:getattendance.php?tchr_id=$tid");


		
}
		
		
	}
	
}
        
			
?>