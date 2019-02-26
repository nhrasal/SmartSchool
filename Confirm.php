<?php
include("database/config.php");
   
    $passkey = $_GET['passkey'];
    $sql = "UPDATE admissionform SET com_code='$passkey' WHERE com_code='$passkey'";
    $result = mysqli_query($myconn,$sql) or die(mysqli_error());
    
    if($result)
    {
        echo '<div>Your account is now active. You may now <a href="slogin.php">Log in</a></div>';
    }
    else
    {
        echo "Some error occur.";
    }
?>