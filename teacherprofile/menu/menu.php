<?php
?>

<?php echo'<a class="navbar-brand js-scroll-trigger" href="index.php?tchr_id='.$tid.' ">'; ?>
        <span class="d-block d-lg-none"></span>
        <span class="d-none d-lg-block">
    
           <img src=" ../admin/image/<?php echo $image; ?>" style=" border-radius: 200px" width="200px" height="200px" position="absolute"/>
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
        <?php echo'<a class="nav-link js-scroll-trigger" href="about.php?tchr_id='.$tid.' ">About</a>'; ?>
          </li>
        
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="getclass.php?tchr_id=<?php echo $tid; ?>">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="allattendance.php?tchr_id=<?php echo $tid; ?>">Attendance</a>
          </li> <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="result.php?tchr_id=<?php echo $tid; ?>">Result</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" target="_blank" href="../index.php">View Site</a>
          </li></li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login/logout.php" onClick="return confirm('Are you sure?');" >logout</a>
          </li>
        </ul>