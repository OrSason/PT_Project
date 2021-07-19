<?php
    require_once('../php/init.php');
    //session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Social.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">

    <!-- JS  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../js/fakeLoader.min.js"></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <title>e-Sport - Social</title>
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
                    echo "Hello " .$_SESSION['user_name'];
                ?>

                <a href="../php/Logout.php"><input class="btn btn-outline-dark" type="button" value="logout" style="margin-left: 30px;"></a>
          </div>
             
          <div id="navbar">
          </div>
        </header>

        <main id="main">
          <div class="row">
            <div class="col" > 
              <img class="img-fluid" alt="Social" id="Social" src="../images/Social - pics/social.jpg" width="600" height="450">
            </div>
          </div>
         
          <div class="wrapper">
            <div class="row">
              <select id="name">
                <option disabled hidden selected>אנא בחר תחום ספורט ונחבר אותך אל הקהילה שלנו</option>
                <option value="running"> ריצה </option>
                <option value="football"> כדורגל </option>
                <option value="basketball"> כדורסל </option>
                <option value="yoga"> יוגה </option>
              </select>
            </div>
    
            <div id="content">
              <div id="running" class="data">
                <p class="image"><img src="../images/Social - pics/running.jpg"></p>
                <p class="group"><b>Group Name</b><span class="details">Run to the sky</span></p>
                <p class="group"><b>Participate</b><span class="details">30</span></p>
                <p class="group"><b>Activity Days</b><span class="details">Sunday, Wedensday</span></p>
                <p class="group"><b>Phone</b><span class="details">Rina - 0541233214</span></p>
                <p class="group"><b>Location</b><span class="details">Tel-Aviv</span></p>
                <?php
                    $weather="";
                    $urlContents="https://api.openweathermap.org/data/2.5/weather?q=".urlencode("tel aviv")."&appid=2a2da6a84955de1ba10e4e4fb3cc4e64";
                    $data = file_get_contents($urlContents);
                    $weatherArray = json_decode($data, true);
                    // print_r($weatherArray);
                    
                    $weather = $weatherArray['weather'][0]['description'];
                    $temp = ($weatherArray['main']['temp']-32)*0.556-110;
                ?>

                <div id="tel-aviv">
                    <?php 
                        if ($weather) {
                            echo "<h3> Tel-Aviv Weather Statistics:</h3>";
                            echo "<strong> Description:</strong> ".$weather."<br>";
                            echo "<strong> Temperature:</strong> ".$temp."<br>"."<br>";
                        }?>
                </div>
                <div class="connect">
                  <ul>
                      <li id=social_icon><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                      <li id=social_icon><a href="#"><i class="fa fa-facebook"></i></a></li>
                  </ul>
                </div>              
              </div>
    
              <div id="football" class="data">
                <p class="image"><img src="../images/Social - pics/football.png"></p>
                <p class="group"><b>Group Name</b><span class="details">Messi is god</span></p>
                <p class="group"><b>Participate</b><span class="details">20</span></p>
                <p class="group"><b>Activity Days</b><span class="details">Monday, Wedensday</span></p>
                <p class="group"><b>Phone</b><span class="details">Shalom - 0541232214</span></p>
                <p class="group"><b>Location</b><span class="details">Haifa</span></p>
                <?php
                    $weather="";
                        $urlContents="https://api.openweathermap.org/data/2.5/weather?q=".urlencode("haifa")."&appid=2a2da6a84955de1ba10e4e4fb3cc4e64";
                        $data = file_get_contents($urlContents);
                        $weatherArray = json_decode($data, true);
                        // print_r($weatherArray);
                        
                        $weather = $weatherArray['weather'][0]['description'];
                        $temp = ($weatherArray['main']['temp']-32)*0.556-110;
                        
                     
                ?>
                
                        <div id="haifa">
                            <?php 
                                if ($weather) {
                                    echo "<h3> Haifa Weather Statistics:</h3>";
                                    echo "<strong> Description:</strong> ".$weather."<br>";
                                    echo "<strong> Temperature:</strong> ".$temp."<br>"."<br>";
                                }?>
                        </div>
                  <div class="connect">
                  <ul>
                      <li id=social_icon><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                      <li id=social_icon><a href="#"><i class="fa fa-facebook"></i></a></li>
                  </ul>
                </div>              </div>
    
              <div id="basketball" class="data">
                <p class="image"><img src="../images/Social - pics/basketball.png"></p>
                <p class="group"><b>Group Name</b><span class="details">This is how you go to NBA</span></p>
                <p class="group"><b>Participate</b><span class="details">10</span></p>
                <p class="group"><b>Activity Days</b><span class="details">Saturday</span></p>
                <p class="group"><b>Phone</b><span class="details">Moti - 05412338984</span></p>
                <p class="group"><b>Location</b><span class="details">Eilat</span></p>
                 <?php
                $weather="";
                    $urlContents="https://api.openweathermap.org/data/2.5/weather?q=".urlencode("eilat")."&appid=2a2da6a84955de1ba10e4e4fb3cc4e64";
                    $data = file_get_contents($urlContents);
                    $weatherArray = json_decode($data, true);
                    // print_r($weatherArray);
                    
                    $weather = $weatherArray['weather'][0]['description'];
                    $temp = ($weatherArray['main']['temp']-32)*0.556-110;
                    
                 
            ?>
            
                    <div id="eilat">
                        <?php 
                            if ($weather) {
                                echo "<h3> Eilat Weather Statistics:</h3>";
                                echo "<strong> Description:</strong> ".$weather."<br>";
                                echo "<strong> Temperature:</strong> ".$temp."<br>"."<br>";
                            }?>
                    </div>
                <div class="connect">
                  <ul>
                      <li id=social_icon><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                      <li id=social_icon><a href="#"><i class="fa fa-facebook"></i></a></li>
                  </ul>
                </div>              </div>
    
              <div id="yoga" class="data">
                <p class="image"><img src="../images/Social - pics/yoga.png"></p>
                <p class="group"><b>Group Name</b><span class="details">Hard Stretches</span></p>
                <p class="group"><b>Participate</b><span class="details">6</span></p>
                <p class="group"><b>Activity Days</b><span class="details">Friday</span></p>
                <p class="group"><b>Phone</b><span class="details">Eyal - 0541288214</span></p>
                <p class="group"><b>Location</b><span class="details">Jerusalem</span></p>
                <?php
                    $weather="";
                        $urlContents="https://api.openweathermap.org/data/2.5/weather?q=".urlencode("jerusalem")."&appid=2a2da6a84955de1ba10e4e4fb3cc4e64";
                        $data = file_get_contents($urlContents);
                        $weatherArray = json_decode($data, true);
                        // print_r($weatherArray);
                        
                        $weather = $weatherArray['weather'][0]['description'];
                        $temp = ($weatherArray['main']['temp']-32)*0.556-110;
                        
                     
                ?>
                
                        <div id="jerusalem">
                            <?php 
                                if ($weather) {
                                    echo "<h3> Jerusalem Weather Statistics:</h3>";
                                    echo "<strong> Description:</strong> ".$weather."<br>";
                                    echo "<strong> Temperature:</strong> ".$temp."<br>"."<br>";
                                }?>
                        </div>
                <div class="connect">
                  <ul>
                      <li id=social_icon><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                      <li id=social_icon><a href="#"><i class="fa fa-facebook"></i></a></li>
                  </ul>
                </div>              </div>
            </div>
          </div>
        </main>  

        <footer id="footer" class="mt-4">
                
        </footer>
      </div>  
    </section>





    <script>

      $(document).ready(function(){
      $("#name").on('change', function(){
          $(".data").hide();
          $("#" + $(this).val()).fadeIn(1000);
      }).change;
      });

    </script>


    
  </body>
</html>