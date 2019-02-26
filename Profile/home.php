

<?php


include("login/session.php");
include("../database/config.php");

$stdid=$_GET['std_id'];



$sql = "SELECT * FROM admissionform WHERE std_id='$stdid' ";
$result = mysqli_query($myconn, $sql);

if (mysqli_num_rows($result) > 0) {
	

    while($row = mysqli_fetch_assoc($result)) 
	
	
{
	$stdid=$row['std_id'];

$image=$row['img_path'];
$name=$row['firstname'];
$lname=$row['lastname'];
$class=$row['class'];
$conta=$row['monumber'];
$email=$row['email'];

	
	
   
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
       <?php include("menu/menu.php"); ?>
      </div>
    </nav>
 <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
       
       <div class="my-auto">
          <h1 class="mb-0"><?php echo $name; ?>
            <span class="text-primary"><?php echo $lname; ?></span>
          </h1>
          <div class="subheading mb-5"> Mobile:<?php echo $conta; ?>
           <a href="mailto:name@email.com">Email:<?php echo $email; ?></a>
          </div>
          <div class="subheading mb-5"> Class:<?php echo $class; ?>
          </div>

          <p class="mb-5"></p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

       
       </section>

 

  </body>

</html>
