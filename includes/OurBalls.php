<?php
    require_once('../php/init.php');
    //session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/OurBalls.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/fakeLoader.min.js"></script>
    
    <title>e-Sport - OurBalls</title>
  </head>

  <div class="myloader"></div>
    <script>
      $(".myloader").fakeLoader({
        timeToHide: 500,
        bgColor: "white",
        spinner: "spinner3"
      });
    </script>

    <script type="text/jscript"> 
      $(document).ready(function(){
          $("#logo").load("../includes/Load.html #logo");
          $("#navbar").load("../includes/Load.html #stickyNavbar");
          $("#footer").load("../includes/Load.html #footer");
        });
    </script>

  <body>
    <section id="background">
      <div class="container" id="page" >
        
        <header id="header">
          <div class="row" id="logo">
          </div> 
          
          <div id="welcome" style="">
          <?php
                    if ($_SESSION['isAdmin'] == "1") {
                      echo "Welcome Admin " .$_SESSION['user_name']; 
                      echo '<a href="../includes/AdminPanel.php"><input class="btn btn-outline-dark" type="button" value="Admin Panel" style="margin-left: 30px;"></a>';
                    }
                    else{
                      echo "Hello " .$_SESSION['user_name'];
                    }
                ?>

                <a href="../php/Logout.php"><input class="btn btn-outline-dark" type="button" value="logout" style="margin-left: 30px;"></a>
          </div>
          
          <div id="navbar">
          </div>
        </header>

        <main id="main">
          <div class="row" id="logo1">
            <img src="../images/OurBalls - pics/logo.jpeg" class="img-fluid" alt="Logo" width="800" height="350">
          </div>
        
          <section>
            <div class="row mb-2 mt-4" style="border-bottom: 4px ridge gainsboro;">
              <div class="col-xs">
                <a href="#"><img class="img-fluid" alt="" id="log" src="../images/OurBalls - pics/soccer/football.jpeg"  width="300" height="300"></a>
              </div>
            </div>  
          
            <div class="row">
              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front" id="front">
                    <img class="img-fluid" alt="VideoSport" src="../images/OurBalls - pics/soccer/football1.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back" id="back">
                    <h1>Messi Maestro</h1>
                    <h3>29.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>
          
              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front" id="front">
                    <img class="img-fluid" alt="VideoSport" src="../images/OurBalls - pics/soccer/football2.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back" id="back">
                    <h1>Maradona Ball</h1>
                    <h3>59.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>

              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front" id="front">
                    <img class="img-fluid" alt="VideoSport" src="../images/OurBalls - pics/soccer/football3.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back" id="back">
                    <h1>Suarez Deluxe</h1>
                    <h3>29.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>            
            </div>            
          </section>

          <section>
            <div class="row mb-2 mt-4" style="border-bottom: 4px ridge gainsboro;">
              <div class="col-xs">
                <img class="img-fluid" alt="" id="log" src="../images/OurBalls - pics/basketball/basketball.jpeg"  width="300" height="300">
              </div>
            </div>  

            <div class="row">
              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front" id="front">
                    <img class="img-fluid" alt="basketball" src="../images/OurBalls - pics/basketball/basketball1.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back" id="back">
                    <h1>Luka Magic</h1>
                    <h3>39.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>

              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front" id="front">
                    <img class="img-fluid" alt="basketball" src="../images/OurBalls - pics/basketball/basketball3.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back" id="back">
                    <h1>King James</h1>
                    <h3>29.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>

              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front" id="front">
                    <img class="img-fluid" alt="basketball" src="../images/OurBalls - pics/basketball/basketball2.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back" id="back">
                    <h1>Air Jordan</h1>
                    <h3>29.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>
            </div> 
          </section>

          <section>
            <div class="row mb-2 mt-4" style="border-bottom: 4px ridge gainsboro;">
              <div class="col-xs">
                <img class="img-fluid" alt="" id="log" src="../images/OurBalls - pics/tennis/tennis.jpeg"  width="300" height="300">
              </div>
            </div>            

            <div class="row">
              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front" id="front">
                    <img class="img-fluid" alt="tennis" src="../images/OurBalls - pics/tennis/tennis4.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back" id="back">
                    <h1>El Nino </h1>
                    <h3>29.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>
            
              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front"id="front">
                    <img class="img-fluid" alt="tennis" src="../images/OurBalls - pics/tennis/tennis2.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back"id="back">
                    <h1>King Roger</h1>
                    <h3>29.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>
            
              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front" id="front">
                    <img class="img-fluid" alt="tennis"  src="../images/OurBalls - pics/tennis/tennis3.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back" id="back">
                    <h1>The Joker</h1>
                    <h3>29.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>
            </div>  
          </section>
          
          <section>
            <div class="row mb-2 mt-4" style="border-bottom: 4px ridge gainsboro;">
              <div class="col-xs">
                <img class="img-fluid" alt="" id="log" src="../images/OurBalls - pics/running/running.png"  width="300" height="300">
              </div>
            </div>            

            <div class="row">
              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front" id="front">
                    <img class="img-fluid" alt="tennis" src="../images/OurBalls - pics/running/shoe1.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back" id="back">
                    <h1>Speed shoes</h1>
                    <h3>129.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>
            
              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front"id="front">
                    <img class="img-fluid" alt="tennis" src="../images/OurBalls - pics/running/shoe2.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back"id="back">
                    <h1>Iron shoes</h1>
                    <h3>129.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>
            
              <div class="flip-card" id="card">
                <div class="flip-card-inner">
                  <div class="flip-card-front" id="front">
                    <img class="img-fluid" alt="tennis"  src="../images/OurBalls - pics/running/shoe3.png"  width="180" height="200">
                  </div>
                  <div class="flip-card-back" id="back">
                    <h1>Ninja shoes</h1>
                    <h3>129.99$</h3>
                    <button type="button" class="btn btn-secondary btn-lg" id="b1">Website</button>
                  </div>
                </div>
              </div>
            </div>  
          </section>

          <div class="row mt-4" id="community">
            <a href="Social.php"><img src="../images/OurBalls - pics/community.png" width="220" height="220"></a>
         </div>
          
        </main>  
        
        <footer id="footer" class="mt-4">
        </footer>
      </div>  
    </section>
  </body>
</html>