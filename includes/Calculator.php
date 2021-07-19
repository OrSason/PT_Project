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
    <link rel="stylesheet" href="../css/Calculator.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/fakeLoader.min.js"></script>

    <title>e-Sport - Calculator</title>
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
          <div class="row" id="logo">
            <div class= "col-xs-6" > 
              <img class="img-fluid" id="top" src="../images/Calc - pics/logo.png" alt="bmi"  width="60%" >
            </div>
          </div>
          
          <div class="row"  id="calculator1">
            <div class="col"  id="calculator">
              <h2>CALCULATE</h2>                
              <input type="text" name="" id="weight" placeholder="Weight In KG">
              <input type="text" name="" id="height" placeholder="Hight in CM">
              <input type="button"  class="btn btn-primary" value="Calculate" id="calculate">
              <div id="yourBMI"> Your BMI Is <span> 00</span>: </div>                  
            </div>
          </div>
            
          <div class="row" id ="guide1">
            <div class="col" id="guide">
              <h2 style=" text-decoration: underline 2px;">Check Your Status</h2>
              <ul>
                <li id = "under"> Under weight = Less then 18.5 BMI</li>
                <li id = "normal"> Normal weight = 18.5 To 24.9 BMI</li>
                <li id = "over"> Over weight = 25 TO 29.9 BMI</li>
                <li id = "obesity"> Obesity = 30 Or Greater BMI</li>
              </ul>  
            </div>
          </div>
          
          <div class="row" id ="guide1">
            <div class="col" id="guide">
              <h2 style=" text-decoration: underline 2px;">Medical Infographic List</h2>
              <div id = "contain"> </div>
            </div>
          </div>
         


          <div class="row" id="logo">
            <div class= "col-xs">
              <input type="button" class="btn btn-primary" value="Click To Display Visual Image" onclick="ShowImage()">
              <input type="button" class="btn btn-primary" value=" Refresh" onclick="history.go(0)">
            </div>              
          </div>

          <div class="row img-fluid" id="logo1">
            <div class= "col-xs">
              <img id ="picture" src="../images/Calc - pics/bmi.png" height="80%" width="80%" style="visibility: hidden">
            </div>              
          </div>
        </main>  

        <footer id="footer" class="mt-4">
        </footer>
      </div>  
    </section>
    
    <script>
        const xhr = new XMLHttpRequest();
        const contain = document.getElementById('contain');

        xhr.onload = function(){
            if(this.status === 200){
                contain.innerHTML = xhr.responseText;
            }
            else{
                console.warn('Did not Recieve 200 ok from response!');
            }
        };
        xhr.open('get','BMIGuide.html');
        xhr.send();
    </script>
    <script src="../js/Calc.js"></script>
  </body>
</html>