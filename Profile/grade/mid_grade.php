<?php
$c=$midmark;
if($c<33){
	echo '<p style="color:red">F<p>';
	
	}
else if($c<40){
	
	echo"D";
	}
	else if($c<50){
	
	echo"C";
	}
	else if($c<60){
	
	echo"B";
	}
	else if($c<70){
	
	echo"A-";
	}
	else if($c<80){
	
	echo"A";
	}
	else if($c>79){
	
	echo"A+";
	}
?>