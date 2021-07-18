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
    <link rel="stylesheet" href="../css/VideoSport.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/fakeLoader.min.js"></script>
    
    <title>EASport - VideoSport</title>
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

        <main>
          <div class="mt-5">
            <img class="img-fluid" id="title_img" src="../images/Video - pics/yoga_title.jpeg" alt="YOGA Title">
            <div class="row">
              <div class="col-md"> 
                <iframe id="video" class="embed-responsive-item img-fluid iframe-radius" src="https://www.youtube.com/embed/WOQC8ETeTVM" allowfullscreen>
                </iframe>
              </div>
              <div class="col-md"> 
                <iframe id="video" class="embed-responsive-item img-fluid iframe-radius" src="https://www.youtube.com/embed/rVO_qZT31O8" allowfullscreen>
                </iframe>
              </div>
              <div class="col-md"> 
                <iframe id="video" class="embed-responsive-item img-fluid iframe-radius" src="https://www.youtube.com/embed/TgdtlFCIq64" allowfullscreen>
                </iframe>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" id="btn" class="mb-5 btn btn-lg mx-auto img-fluid center btn-block responsive-width">
                <a id="click" class="img-fluid" target="blank" href="https://www.youtube.com/user/cexercize" >To the youtube Channel</a>
              </button>
            </div>
          </div>
          
          <div class="mt-5">
            <img class="img-fluid" id="title_img" src="../images/Video - pics/gym_title.jpeg" alt="GYM Title">
            <div class="row">
              <div class="col-md"> 
                <iframe id="video" class="embed-responsive-item img-fluid iframe-radius" src="https://www.youtube.com/embed/uzxGKGoqAzA" allowfullscreen>
                </iframe>
              </div>
              <div class="col-md"> 
                <iframe id="video" class="embed-responsive-item img-fluid iframe-radius" src="https://www.youtube.com/embed/lhJkJqNRXI8" allowfullscreen>
                </iframe>
              </div>  
              <div class="col-md"> 
                <iframe id="video" class="embed-responsive-item img-fluid iframe-radius" src="https://www.youtube.com/embed/T9AD9JB2rWQ" allowfullscreen>
                </iframe>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" id="btn" class="mb-5 btn btn-lg mx-auto img-fluid center btn-block responsive-width">
                <a id="click" class="img-fluid" target="blank" href="https://www.youtube.com/user/FitnessBlender/featured" >To the youtube Channel</a>
              </button>
            </div>
          </div>
          
          <div class="mt-5">
            <img class="img-fluid" id="title_img" src="../images/Video - pics/running_title.jpeg" alt="Running Title">
            <div class="row">
              <div class="col-md"> 
                <iframe id="video" class="embed-responsive-item img-fluid iframe-radius" src="https://www.youtube.com/embed/kvITDpAfJxg" allowfullscreen>
                </iframe>
              </div>  
              <div class="col-md"> 
                <iframe id="video" class="embed-responsive-item img-fluid iframe-radius" src="https://www.youtube.com/embed/_SkbmTq5DzM" allowfullscreen>
                </iframe>
              </div>
              <div class="col-md"> 
                <iframe id="video" class="embed-responsive-item img-fluid iframe-radius" src="https://www.youtube.com/embed/8rv84F9Vtm0" allowfullscreen>
                </iframe>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" id="btn" class="mb-5 btn btn-lg mx-auto center btn-block responsive-width">
                <a id="click" class="img-fluid" target="blank" href="https://www.youtube.com/channel/UCX7dV4OPDSutwMUauSD5AAA" >To the youtube Channel</a>
              </button>
            </div>
          </div>
          
          <div style="text-align: center;">
            <a href="FeedBack.php">
              <img class="img-fluid" id="feedback_link" src="../images/Video - pics/feedback_link.jpeg" alt="FeedBack Img">
            </a>
          </div>
          
        </main>  

        <footer id="footer" class="mt-4">
     
        </footer>
      </div>  
    </section>

    































  </body>
</html>