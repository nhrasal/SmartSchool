<?php

 ?>
 <?php echo'<a class="navbar-brand js-scroll-trigger" href="index.php?std_id='.$stdid.' ">'; ?>
        <span class="d-block d-lg-none"></span>
        <span class="d-none d-lg-block">
    
          <?php echo'<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../image/'.$image.'" alt="">'; ?>
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
        
          <li class="nav-item">
        <?php echo'<a class="nav-link js-scroll-trigger" href="about.php?std_id='.$stdid.' ">About</a>'; ?>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="vattendance.php?std_id=<?php echo $stdid; ?>">Attendance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="result.php?std_id=<?php echo $stdid; ?>">Result</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" target="_blank" href="../index.php">View Site</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login/logout.php" onClick="return confirm('Are you sure?');" >logout</a>
          </li>
        </ul>