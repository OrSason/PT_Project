<?php
    require_once('../php/init.php');
    //session_start();
    $username = $_POST['username']
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/FeedBack.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2ht`0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/fakeLoader.min.js"></script>

    
    <title>e-Sport - FeedBack</title>
  </head>

  <body>
    
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
          <div class="" id="navbar">
          </div>
        </header>

        <main id="main">
          <div class="row" >
            <div class="col"> 
              <img class="img-fluid " alt="feedback" id="feedback" src="../images/FeedBack - pics/feedbackjpg.jpg" width="600" height="450">
            </div>
          </div>
          
          <div class="row" id="row2">
            <div id="error"></div>
            <form id="form" method="POST" action="../php/add_feedback.php">
              <fieldset>
                <!-- User Name input -->
                <div class="form m-4">
                  <input id="name" type="text" class="form-control" name='name' size=40 placeholder="Enter your Name" required 
                  oninvalid="this.setCustomValidity('Please enter your name!')"
                  oninput="setCustomValidity('')"/>
                </div>


                <!-- Video Name input -->
                <div class="form-group m-4">
                  <select id="video" class="form-control" name='video_name' required
                  oninvalid="this.setCustomValidity('Please choose a Video!')"
                  oninput="setCustomValidity('')">
                    <option disabled hidden selected value="">Choose Video</option>
                    <option value="yoga1">Yoga Video 1 </option>
                    <option value="yoga2">Yoga Video 2 </option>
                    <option value="yoga3">Yoga Video 3 </option>
                    <option value="gym1">Training Video 1</option>
                    <option value="gym2">Training Video 2</option>
                    <option value="gym3">Training Video 3</option>
                    <option value="run1">Runinng Video 1</option>
                    <option value="run2">Runinng Video 2</option>
                    <option value="run3">Runinng Video 3</option>
                  </select>                
                </div>
              
                <!-- Rating Stars -->
                <div class="star-widget">
                  <input type="radio" name="rate" id="rate-5" value="5">
                  <label for="rate-5" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-4" value="4">
                  <label for="rate-4" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-3" value="3">
                  <label for="rate-3" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-2" value="2">
                  <label for="rate-2" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-1" value="1">
                  <label for="rate-1" class="fas fa-star"></label>
                </div> 

                <!-- Message input -->
                <div class="form-outline m-4">
                  <textarea id="comment" class="form-control" name='message' rows="10" placeholder="Comment" required
                  oninvalid="this.setCustomValidity('Write your comment!')"
                  oninput="setCustomValidity('')"></textarea>
                </div>
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-secondary btn-lg m-4" formtarget="_self" name="commentSubmit" id="button">שלח</button>

            </fieldset>
            </form>



            
          </div>
        </main>  

        <footer id="footer" class="mt-4">
              
        </footer>
      </div>  
    </section>
  </body>
</html>


