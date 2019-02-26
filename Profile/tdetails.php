

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
   </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>
  <div id="" >
<?php include("header/header.php");   ?>
</div>
  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
       
      </div>
    </nav>
 <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
       
       <div class="my-auto">
       
       <?php
include("../database/config.php");

$tid=$_REQUEST['tchr_id'];
$sql = "SELECT * FROM teacherinfo WHERE tchr_id='$tid'  ";
$result = mysqli_query($myconn, $sql);


if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$tid=$row['tchr_id'];

$image=$row['img_path'];
$fname=$row['tfname'];
$addr=$row['address'];
$eml=$row['email'];
$eq=$row['eduqf'];
$gdr=$row['gender'];
$pass=base64_decode($row['password']);

$name=$row['tname'];
$mobile=$row['mnumber'];
$user=$row['uname'];
	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);

?>
<br>
<br>
<br>

      <table  width="100%" border="">
      
      <td colspan="2" ><center><img src="../admin/image/<?php echo $image; ?>" style=" border-radius: 200px" width="200px" height="200px"></center></td>
      <h2 >About of <?php echo $name;?></h2>
      

<tr><td width="100px"> Name </td><td width="200px"><?php echo $name; ?> </td></tr>
<tr><td width="100px"> Gender </td><td width="200px"><?php echo $gdr; ?></td></tr>
<tr><td width="200px"> Fathers Name </td><td width="200px"><?php echo $fname; ?></td></tr>
 
<tr><td width="100px">  Address  </td><td width="200px"><?php echo $addr; ?></td></tr>
<tr><td width="100px">Mobile </td><td width="200px"><?php echo $mobile; ?></td></tr>
<tr><td width="100px">Email </td><td width="200px"><?php echo $eml; ?></td></tr>
</table>
       
         
        </div>

       
       </section>

 

  </body>

</html>
