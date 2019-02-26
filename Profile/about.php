

<?php


include("login/session.php");
include("../database/config.php");

$stdid=$_GET['std_id'];



$sql = "SELECT * FROM admissionform WHERE std_id='$stdid' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$sid=$row['std_id'];

$image=$row['img_path'];
$cls=$row['cls_id'];
$dof=$row['dofb'];
$cnty=$row['country'];
$fname=$row['fathersname'];
$mname=$row['mothersname'];
$addr1=$row['preadds'];
$addr2=$row['preadds'];
$eml=$row['email'];
$gdr=$row['gender'];
$pass=$row['password'];

$name=$row['firstname'];
$name2=$row['lastname'];
$mobile=$row['monumber'];
$user=$row['uname'];

	
	
   
    }	
} else {
    echo "0 results";
}


mysqli_close($myconn);



?>








<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $name; ?>
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
       <?php echo'<a class="navbar-brand js-scroll-trigger" href="home.php?std_id='.$stdid.' ">'; ?>
         <?php include("menu/menu.php"); ?>
      </div>
    </nav>

 <div class="container-fluid p-0"><br>
    <br>
    <br>
    <br>
    <br>

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
       <div >
      <table  width="100%" border="">
      <h2 >About of <?php echo $name;?></h2>
      
<h4><b><tr><td width="100px">Student Id </td><td width="200px"><?php echo $sid; ?></td></tr>
<tr><td width="100px"> Name </td><td width="200px"><?php echo $name; ?>  <?php echo $name2; ?></td></tr>
<tr><td width="100px"> Gender </td><td width="200px"><?php echo $gdr; ?></td></tr>
<tr><td width="200px"> Fathers Name </td><td width="200px"><?php echo $fname; ?></td></tr>
<tr><td width="100px"> Mothers Name </td><td width="200px"><?php echo $mname; ?></td></tr>
 
<tr><td width="100px"> Present Address  </td><td width="200px"><?php echo $addr1; ?></td></tr>
<tr><td width="100px"> Permenant Address  </td><td width="200px"><?php echo $addr2; ?></td></tr>
<tr><td width="100px">Mobile </td><td width="200px"><?php echo $mobile; ?></td></tr>
<tr><td width="100px">Country </td><td width="200px"><?php echo $cnty; ?></td></tr>
<tr><td width="100px">Email </td><td width="200px"><?php echo $eml; ?></td></tr>
<tr><td width="100px"> Class </td><td width="200px"><?php echo $cls; ?></td></tr>


<tr><td width="100px">Date Of Birth </td><td width="200px"><?php echo $dof; ?></td></tr>
<tr><td width="100px">User name </td><td width="200px"><?php echo $user; ?></td></tr>


</table>
       
      </div> </section>

 

  </body>

</html>
