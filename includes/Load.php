
<?php
    require_once('../php/init.php');
   // session_start();

   $username=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div id="welcome">
        <?php
            echo $_SESSION['user_name'];
        ?>
    </div>
    <div id="logo">
        <a href="HomePage.php"><img src="../images/logo.png" class="img-fluid" alt="Logo"></a>
    </div>

    <div id="stickyNavbar">
        <div class="row" >
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav"  >

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" >
                  <li class="nav-item active">
                  <a class="nav-link" href="HomePage.php?username=<?php echo $_SESSION['user_name'] ?>">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Profile.php?username=<?php echo $_SESSION['user_name'] ?>">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="OurBalls.php?username=<?php echo $_SESSION['user_name'] ?>">OurBalls</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="VideoSport.php?username=<?php echo $_SESSION['user_name'] ?>">VideoSport</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Social.php?username=<?php echo $_SESSION['user_name'] ?>">Social</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Health.php?username=<?php echo $_SESSION['user_name'] ?>">Health</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Calculator.php?username=<?php echo $_SESSION['user_name'] ?>">Calculator</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="FeedBack.php?username=<?php echo $_SESSION['user_name'] ?>">Feedback</a>
                  </li>
                  
                </ul>
              </div>
          </nav>
        </div> 
      </div>

    <footer id="footer" class="mt-4">
    <div class="row" id="row4">
        <div class="col-xs">
        <p id="footer_text">
            Contact us: +972-55555 &nbsp &nbsp | &nbsp &nbsp 
            <a href="us@mail.com"> EASport@gmail.com </a> <br>
        </p>
        </div>  
    </div>
    
    <div class="row " id="row5">  
        <div class="col social-menu" >
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
        </div>
    </div>  

    <div class="row" id="row6">
        <div class="col-xs">
        <p id="footer_text">
            <br> PT_Project 2021 Or & Eyal & Asaf
        </p>
        </div>  
    </div>       
    </footer>
</body>
</html>