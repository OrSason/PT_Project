<?php
    require_once('../php/init.php');
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/HomePage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     
    <script type="text/jscript"> 

        $(document).ready(function(){
          $("#logo").load("../includes/Load.html #logo");
          $("#navbar").load("../includes/Load.html #stickyNavbar");
          $("#footer").load("../includes/Load.html #footer");
        });

    </script>

    <title>EASport Official Site</title>
    
    
  </head>

  <body>
    <section id="background">
      
      <div class="container" id="page" >

        <header>
                
      
            <div class="">
                <canvas class="mt-1" id="canvas" width="150" height="150" style="float: left; position:absolute"></canvas>    
            </div>
          
            <div class="row" id="logo">
            </div>
            
            <div id="welcome" style="">
                <?php
                    echo "Hello " .$_SESSION['user_name'];
                ?>

                <a href="../php/Logout.php"><input class="btn btn-outline-dark" type="button" value="logout" style="margin-left: 30px;"></a>
                
             </div>
          
        </header>

        <main id="main">
          <div class="sticky-top" id="navbar">
            
          </div>
          
          <div class="row" id="row1">
            <div class="col-md" id="logo_links1"> 
              <a href="OurBalls.php"><img class="img-fluid" alt="OurBalls" id="logo_links2" src="../images/ourballs.png" width="450" height="300"></a>
            </div>
            <div class="col-md" id="logo_links1"> 
              <a href="VideoSport.php"><img class="img-fluid" alt="VideoSport" id="logo_links2" src="../images/videosport.png"  width="450" height="300"></a>
            </div>
          </div>

          <div class="row" id="row2">
            <div class="col-md" id="logo_links1"> 
              <a href="Social.php"><img class="img-fluid" alt="Social" id="logo_links2" src="../images/social.png"  width="450" height="300"></a>
            </div>  
            <div class="col-md" id="logo_links1"> 
              <a href="Health.php"><img class="img-fluid" alt="VideoSport" id="logo_links2" src="../images/health.png"  width="450" height="300"></a>
            </div>
          </div>
          
          <div class="row" id="row3">
            <div class="col-md" id="logo_links1"> 
              <a href="Calculator.php"><img class="img-fluid" alt="calc" id="logo_links2" src="../images/calc.png"  width="450" height="300"></a>
            </div>
            <div class="col-md" id="logo_links1"> 
              <a href="FeedBack.php"><img class="img-fluid" alt="FeedBack" id="logo_links2" src="../images/feedback.png"  width="450" height="300"></a>
            </div>  
          </div>
        </main>  

        <footer id="footer" class="mt-4">
                
        </footer>
      </div>  
    </section>


  </body>
  
  <script>
    window.onload = function () {
        setInterval(showClock, 1000);

        function showClock() {

            // DEFINE CANVAS AND ITS CONTEXT.
            var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');

            var date = new Date;
            var angle;
            var secHandLength = 60;

            // CLEAR EVERYTHING ON THE CANVAS. RE-DRAW NEW ELEMENTS EVERY SECOND.
            ctx.clearRect(0, 0, canvas.width, canvas.height);        

            OUTER_DIAL1();
            OUTER_DIAL2();
            CENTER_DIAL();
            MARK_THE_HOURS();
            MARK_THE_SECONDS();

            SHOW_SECONDS();
            SHOW_MINUTES();
            SHOW_HOURS();

            function OUTER_DIAL1() {
                ctx.beginPath();
                ctx.arc(canvas.width / 2, canvas.height / 2, secHandLength + 10, 0, Math.PI * 2);
                ctx.strokeStyle = '#92949C';
                ctx.stroke();
            }
            function OUTER_DIAL2() {
                ctx.beginPath();
                ctx.arc(canvas.width / 2, canvas.height / 2, secHandLength + 7, 0, Math.PI * 2);
                ctx.strokeStyle = '#929BAC';
                ctx.stroke();
            }
            function CENTER_DIAL() {
                ctx.beginPath();
                ctx.arc(canvas.width / 2, canvas.height / 2, 2, 0, Math.PI * 2);
                ctx.lineWidth = 3;
                ctx.fillStyle = '#353535';
                ctx.strokeStyle = '#0C3D4A';
                ctx.stroke();
            }

            function MARK_THE_HOURS() {

                for (var i = 0; i < 12; i++) {
                    angle = (i - 3) * (Math.PI * 2) / 12;       // THE ANGLE TO MARK.
                    ctx.lineWidth = 1;            // HAND WIDTH.
                    ctx.beginPath();

                    var x1 = (canvas.width / 2) + Math.cos(angle) * (secHandLength);
                    var y1 = (canvas.height / 2) + Math.sin(angle) * (secHandLength);
                    var x2 = (canvas.width / 2) + Math.cos(angle) * (secHandLength - (secHandLength / 7));
                    var y2 = (canvas.height / 2) + Math.sin(angle) * (secHandLength - (secHandLength / 7));

                    ctx.moveTo(x1, y1);
                    ctx.lineTo(x2, y2);

                    ctx.strokeStyle = '#466B76';
                    ctx.stroke();
                }
            }

            function MARK_THE_SECONDS() {

                for (var i = 0; i < 60; i++) {
                    angle = (i - 3) * (Math.PI * 2) / 60;       // THE ANGLE TO MARK.
                    ctx.lineWidth = 1;            // HAND WIDTH.
                    ctx.beginPath();

                    var x1 = (canvas.width / 2) + Math.cos(angle) * (secHandLength);
                    var y1 = (canvas.height / 2) + Math.sin(angle) * (secHandLength);
                    var x2 = (canvas.width / 2) + Math.cos(angle) * (secHandLength - (secHandLength / 30));
                    var y2 = (canvas.height / 2) + Math.sin(angle) * (secHandLength - (secHandLength / 30));

                    ctx.moveTo(x1, y1);
                    ctx.lineTo(x2, y2);

                    ctx.strokeStyle = '#C4D1D5';
                    ctx.stroke();
                }
            }

            function SHOW_SECONDS() {

                var sec = date.getSeconds();
                angle = ((Math.PI * 2) * (sec / 60)) - ((Math.PI * 2) / 4);
                ctx.lineWidth = 0.5;              // HAND WIDTH.

                ctx.beginPath();
                // START FROM CENTER OF THE CLOCK.
                ctx.moveTo(canvas.width / 2, canvas.height / 2);   
                // DRAW THE LENGTH.
                ctx.lineTo((canvas.width / 2 + Math.cos(angle) * secHandLength),
                    canvas.height / 2 + Math.sin(angle) * secHandLength);

                // DRAW THE TAIL OF THE SECONDS HAND.
                ctx.moveTo(canvas.width / 2, canvas.height / 2);    // START FROM CENTER.
                // DRAW THE LENGTH.
                ctx.lineTo((canvas.width / 2 - Math.cos(angle) * 20),
                    canvas.height / 2 - Math.sin(angle) * 20);

                ctx.strokeStyle = '#586A73';        // COLOR OF THE HAND.
                ctx.stroke();
            }

            function SHOW_MINUTES() {

                var min = date.getMinutes();
                angle = ((Math.PI * 2) * (min / 60)) - ((Math.PI * 2) / 4);
                ctx.lineWidth = 1.5;              // HAND WIDTH.

                ctx.beginPath();
                ctx.moveTo(canvas.width / 2, canvas.height / 2);  // START FROM CENTER.
                // DRAW THE LENGTH.
                ctx.lineTo((canvas.width / 2 + Math.cos(angle) * secHandLength / 1.1),      
                    canvas.height / 2 + Math.sin(angle) * secHandLength / 1.1);

                ctx.strokeStyle = '#999';  // COLOR OF THE HAND.
                ctx.stroke();
            }

            function SHOW_HOURS() {

                var hour = date.getHours();
                var min = date.getMinutes();
                angle = ((Math.PI * 2) * ((hour * 5 + (min / 60) * 5) / 60)) - ((Math.PI * 2) / 4);
                ctx.lineWidth = 1.5;              // HAND WIDTH.

                ctx.beginPath();
                ctx.moveTo(canvas.width / 2, canvas.height / 2);     // START FROM CENTER.
                // DRAW THE LENGTH.
                ctx.lineTo((canvas.width / 2 + Math.cos(angle) * secHandLength / 1.5),      
                    canvas.height / 2 + Math.sin(angle) * secHandLength / 1.5);

                ctx.strokeStyle = '#000';   // COLOR OF THE HAND.
                ctx.stroke();
            }
        }
    }
</script>
</html>