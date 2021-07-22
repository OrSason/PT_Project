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
    <link rel="stylesheet" href="../css/Health.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/fakeLoader.min.js"></script>

    <title>e-Sport - Health</title>
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
          $("#logo").load("../includes/Load.php #logo");
          $("#navbar").load("../includes/Load.php #stickyNavbar");
          $("#footer").load("../includes/Load.php #footer");
        });

    </script>

  <body>
    <section id="background">
      <div class="container" id="page" >
        
        <header  id="header">
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
          <div class="row" >
            <div class="col"> 
              <img class="img-fluid " alt="health" src="../images/Health - pics/health.png" width="600" height="450">
            </div>
          </div>

          <!-- כתבות חלק 1 -->
          <div class="row" id="articleslogo">
            <img class="img-fluid" alt="EatRight" src="../images/Health - pics/eatright.jpg" width="400" height="250">
           </div>
           <div class="row mb-5 mt-5" id="articles">
                 
             <article class="col-md">
               <ul class="featured">
                 <li id="card"><img src="../images/Health - pics/article1.jpg">
                   <div class="title_caption"><a href="">מסת שריר VS מסת שומן</a></div>
                 </li>
               </ul>
             </article>
 
             <article class="col-md">
               <ul class="featured">
                 <li id="card"><img src="../images/Health - pics/article2.jpg">
                   <div class="title_caption"><a href="https://masslow.co.il/%d7%90%d7%99%d7%9a-%d7%9c%d7%90%d7%9b%d7%95%d7%9c-%d7%91%d7%a8%d7%99%d7%90-%d7%94%d7%98%d7%99%d7%a4%d7%99%d7%9d-%d7%a9%d7%99%d7%a9%d7%a0%d7%95-%d7%90%d7%aa-%d7%97%d7%99%d7%99%d7%9b%d7%9d/">איך לאכול בריא?</a></div>
                 </li>
               </ul>
             </article>
 
             <article class="col-md">
               <ul class="featured">
                 <li id="card"><img src="../images/Health - pics/article3.jpg">
                   <div class="title_caption"><a href="https://masslow.co.il/mass-nutrition-menu/'">תפריט תזונה למסה</a></div>
                 </li>
               </ul>
             </article>
 
             <article class="col-md">
               <ul class="featured">
                 <li id="card"> <img src="../images/Health - pics/article4.jpg">
                   <div class="title_caption"><a href="'https://masslow.co.il/menu-for-weight-gain/'">תפריט לעלייה במשקל</a></div>
                 </li>
               </ul>
             </article>
           </div>
 
 
            <!-- כתבות חלק 2 -->
           <div class="row" id="articleslogo">
             <img class="img-fluid" alt="TrainRight" src="../images/Health - pics/exercise.png" width="400" height="250">
           </div>  
           <div class="row mb-5 mt-5" id="articles">
               
             <article class="col-md">
               <ul class="featured">
                 <li id="card"><img src="../images/Health - pics/article5.jpg">
                   <div class="title_caption"><a href="">איך לפתח שרירים מהר?</a></div>
                 </li>
               </ul>
             </article>
 
             <article class="col-md">
               <ul class="featured">
                 <li id="card"><img src="../images/Health - pics/article6.jpg">
                   <div class="title_caption"><a href="'https://masslow.co.il/%d7%90%d7%99%d7%9a-%d7%9c%d7%90%d7%9b%d7%95%d7%9c-%d7%'https://masslow.co.il/%d7%aa%d7%95%d7%9b%d7%a0%d7%99%d7%aa-%d7%90%d7%99%d7%9e%d7%95%d7%a0%d7%99%d7%9d-%d7%9c%d7%97%d7%99%d7%98%d7%95%d7%91-%d7%91%d7%91%d7%99%d7%aa-%d7%94%d7%90%d7%9d-%d7%a0%d7%99%d7%aa%d7%9f/'%d7%a8%d7%99%d7%90-%d7%94%d7%98%d7%99%d7%a4%d7%99%d7%9d-%d7%a9%d7%99%d7%a9%d7%a0%d7%95-%d7%90%d7%aa-%d7%97%d7%99%d7%99%d7%9b%d7%9d/'">תוכנית ביתית לחיטוב?</a></div>
                 </li>
               </ul>
             </article>
 
             <article class="col-md">
               <ul class="featured">
                 <li id="card"><img src="../images/Health - pics/article7.jpg">
                   <div class="title_caption"><a href="'https://masslow.co.il/training-program-for-toning-and-weight-loss/'">תוכנית לחיטוב והרזייה</a></div>
                 </li>
               </ul>
             </article>
 
             <article class="col-md">
               <ul class="featured">
                 <li id="card"> <img src="../images/Health - pics/article8.jpg">
                   <div class="title_caption"><a href="'https://masslow.co.il/sculpt-the-body/'">תוכנית לחיטוב מהיר</a></div>
                 </li>
               </ul>
             </article>
 
            <div class="row mt-4" id="bmi">
               <a href="Calculator.php"><img src="../images/Health - pics/BMIlogo.jpg"></a>
            </div>
           
           </div>
        </main>  

        <footer id="footer" class="mt-4">
              
        </footer>
      </div>  
    </section>
  </body>
</html>