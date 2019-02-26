<?php
include("config.php");



//------ADMISSION----------

$tbl_admissionform = "CREATE TABLE IF NOT EXISTS admissionform(

							std_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(std_id) ,
							cls_id INT(10) NOT NULL,
							FOREIGN KEY(cls_id) REFERENCES classinfo(cls_id),
							firstname VARCHAR(50) NOT NULL,
							lastname VARCHAR(50) NOT NULL,
							fathersname VARCHAR(50) NOT NULL,
							mothersname VARCHAR(50) NOT NULL,
							preadds VARCHAR(150) NOT NULL,
							peradds VARCHAR(150) NOT NULL,
							monumber VARCHAR(20) NOT NULL,
							email VARCHAR(50) NOT NULL,
							gender ENUM('male','female','others') NOT NULL,
							religion ENUM('islam','hindu','chirestan') NOT NULL,
							dofb date NOT NULL,
							country ENUM('bangladesh','india','usa') NOT NULL,
							com_code VARCHAR(255) NOT NULL,
							uname VARCHAR(50) NOT NULL,
						
							password VARCHAR(100) NOT NULL,
								action VARCHAR(50) NOT NULL,
							img_name VARCHAR(100) NOT NULL,
							img_path VARCHAR(100) NOT NULL,
							img_type VARCHAR(100) NOT NULL
							
							)";


$query = mysqli_query($myconn, $tbl_admissionform);

if ($query === TRUE) {
	echo "<h3>ADMISSION  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>ADMISSION INFORMAT table NOT created :( </h3>";
}

//------photo info----------

$tbl_photo = "CREATE TABLE IF NOT EXISTS photo(

							pc_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(pc_id) ,
							picname VARCHAR(50) NOT NULL,
							img_name VARCHAR(50) NOT NULL,
							img_path VARCHAR(50) NOT NULL ,
							img_type VARCHAR(50) NOT NULL ,
							pdesc VARCHAR(500) NOT NULL

							)";


$query = mysqli_query($myconn, $tbl_photo);

if ($query === TRUE) {
	echo "<h3>PHOTO  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>PHOTO INFORMAT table NOT created :( </h3>";
}



$tbl_teacherinfo = "CREATE TABLE IF NOT EXISTS teacherinfo(

							tchr_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(tchr_id) ,						
							tname VARCHAR(50) NOT NULL,							
							tfname VARCHAR(50) NOT NULL,
							address VARCHAR(100) NOT NULL,
							mnumber VARCHAR(50) NOT NULL,
							email VARCHAR(50) NOT NULL,
							eduqf VARCHAR(100) NOT NULL,
							gender ENUM('male','female','others') NOT NULL,
							uname VARCHAR(50) NOT NULL,
							password VARCHAR(100) NOT NULL,
							action VARCHAR(50) NOT NULL,

							img_name VARCHAR(50) NOT NULL,
							img_path VARCHAR(50) NOT NULL,
							img_type VARCHAR(50) NOT NULL
							
							)";


$query = mysqli_query($myconn, $tbl_teacherinfo);

if ($query === TRUE) {
	echo "<h3>Teacher  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>Teacher INFORMAT table NOT created :( </h3>";
}

	$tbl_stdattendance = "CREATE TABLE IF NOT EXISTS stdattendance(

							atnd_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(atnd_id) ,
							std_id INT(10) NOT NULL,
							FOREIGN KEY(std_id) REFERENCES admissionform(std_id),
							tchr_id INT(10) NOT NULL,
							FOREIGN KEY(tchr_id) REFERENCES teacherinfo(tchr_id),
							cls_id INT(10) NOT NULL,
							FOREIGN KEY(cls_id) REFERENCES classinfo(cls_id),
							course_id INT(10) NOT NULL,
							FOREIGN KEY(course_id) REFERENCES courseinfo(course_id),
							course TEXT(10) NOT NULL,
							firstname VARCHAR(50) NOT NULL,
							date date NOT NULL,
							status TEXT(10) NOT NULL
							
							)";


$query = mysqli_query($myconn, $tbl_stdattendance);

if ($query === TRUE) {
	echo "<h3>STUDENT ATTENDANCE   INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>STUDENT ATTENDANCE INFORMAT table NOT created :( </h3>";
}


$tbl_admininfo = "CREATE TABLE IF NOT EXISTS admininfo(

							ad_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(ad_id) ,						
							aname VARCHAR(50) NOT NULL,							
							address VARCHAR(100) NOT NULL,
							mnumber VARCHAR(50) NOT NULL,
							email VARCHAR(50) NOT NULL,
							
							gender ENUM('male','female','others') NOT NULL,
							uname VARCHAR(50) NOT NULL,
							password VARCHAR(100) NOT NULL,
							action VARCHAR(50) NOT NULL,

							img_name VARCHAR(50) NOT NULL,
							img_path VARCHAR(50) NOT NULL,
							img_type VARCHAR(50) NOT NULL
							
							)";


$query = mysqli_query($myconn, $tbl_admininfo);

if ($query === TRUE) {
	echo "<h3>Admin  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>Admin INFORMAT table NOT created :( </h3>";
}



//------message info----------

$tbl_message = "CREATE TABLE IF NOT EXISTS message(

						
							ms_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(ms_id) ,	
							std_id INT(10) NOT NULL,
							FOREIGN KEY(std_id) REFERENCES admissionform(std_id),
							tchr_id INT(10) NOT NULL,
							FOREIGN KEY(tchr_id) REFERENCES teacherinfo(tchr_id),
							ad_id INT(10) NOT NULL,
							FOREIGN KEY(ad_id) REFERENCES admininfo(ad_id),
							message VARCHAR(50) NOT NULL,							
							messaged VARCHAR(200) NOT NULL,
							img_name VARCHAR(50) NOT NULL,
							img_path VARCHAR(50) NOT NULL,
							img_type VARCHAR(50) NOT NULL
							

							)";


$query = mysqli_query($myconn, $tbl_message);

if ($query === TRUE) {
	echo "<h3>MESSAGE  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>MESSAGE INFORMAT table NOT created :( </h3>";
}

//------message info----------

$tbl_Classinfo = "CREATE TABLE IF NOT EXISTS classinfo(

							cls_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(cls_id) ,						
							clsname VARCHAR(50) NOT NULL						
							
							
							


)";


$query = mysqli_query($myconn, $tbl_Classinfo);

if ($query === TRUE) {
	echo "<h3>CLASS  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>CLASS INFORMAT table NOT created :( </h3>";
}


$tbl_midresult = "CREATE TABLE IF NOT EXISTS midresult(

							rslt_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(rslt_id) ,						
							std_id INT(10) NOT NULL,
							FOREIGN KEY(std_id) REFERENCES admissionform(std_id),
							tchr_id INT(10) NOT NULL,
							FOREIGN KEY(tchr_id) REFERENCES teacherinfo(tchr_id),
							cls_id INT(10) NOT NULL,
							FOREIGN KEY(cls_id) REFERENCES classinfo(cls_id),
							course_id INT(10) NOT NULL,
							FOREIGN KEY(course_id) REFERENCES courseinfo(course_id),
							course TEXT(10) NOT NULL,
							date date NOT NULL,
							firstname TEXT(50) NOT NULL,
							midexam TEXT(50) NOT NULL
							
							
							)";


$query = mysqli_query($myconn, $tbl_midresult);

if ($query === TRUE) {
	echo "<h3>RESULT  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>RESULT INFORMAT table NOT created :( </h3>";
}

$tbl_finalresult = "CREATE TABLE IF NOT EXISTS finalresult(

							rslt_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(rslt_id) ,						
							std_id INT(10) NOT NULL,
							FOREIGN KEY(std_id) REFERENCES admissionform(std_id),
							tchr_id INT(10) NOT NULL,
							FOREIGN KEY(tchr_id) REFERENCES teacherinfo(tchr_id),
							cls_id INT(10) NOT NULL,
							FOREIGN KEY(cls_id) REFERENCES classinfo(cls_id),
							course_id INT(10) NOT NULL,
							FOREIGN KEY(course_id) REFERENCES courseinfo(course_id),
							course TEXT(10) NOT NULL,
							date date NOT NULL,
							firstname TEXT(50) NOT NULL,
							finalexam TEXT(50) NOT NULL
					
							
							
							)";


$query = mysqli_query($myconn, $tbl_finalresult);

if ($query === TRUE) {
	echo "<h3>RESULT  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>RESULT INFORMAT table NOT created :( </h3>";
}







$tbl_courseinfo = "CREATE TABLE IF NOT EXISTS courseinfo(

							course_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(course_id) ,						
							tchr_id INT(10) NOT NULL,
							FOREIGN KEY(tchr_id) REFERENCES teacherinfo(tchr_id),
							cls_id INT(10) NOT NULL,
							FOREIGN KEY(cls_id) REFERENCES classinfo(cls_id),
							coursename TEXT(10) NOT NULL,
							clsname TEXT(10) NOT NULL
							
							
							)";


$query = mysqli_query($myconn, $tbl_courseinfo);

if ($query === TRUE) {
	echo "<h3>Course  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>Course INFORMAT table NOT created :( </h3>";
}




?>
 