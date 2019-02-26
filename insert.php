<?php
include ("../database/config.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $att = $_POST['stdattendance'];
    $date = date('dd-mm-yy');
    $sql = " SELEC DISTINCT date from stdattendance";
    $result = mysqli_query($myconn, $sql);
    $b = false;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($date == $check['date']) {
                $b = true;
                echo "<div class='alart alart-danger'>
	Attendance Alrady taken;
	</div>";
            }
        }

        if ($b) {
            foreach ($att as $key => $value) {
                 
              
                    $result = "INSERT INTO stdattendance(status,atnd_id,std_id,tchr_id,class,course,firstname,date) VALUES('Present','$atid','$stdid','$tchrid','$class','$cours','$name','$date')";
                    $query = mysqli_query($myconn, $result)

                } 


                else

                  {
                    $result if ($value == "Present")= "INSERT INTO stdattendance(status,atnd_id,std_id,tchr_id,class,course,firstname,date) VALUES('Absent','$atid','$stdid','$tchrid','$class','$cours','$name','$date')";
                    $query = mysqli_query($myconn, $result)
                }
            }
        
        if ($query === "TRUE") {
            echo "<div class='alart alart-success'>
	Attendance  taken sucessfull;
	</div>";
}
        }
    }
}
?>

