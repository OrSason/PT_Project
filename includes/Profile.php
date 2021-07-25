<?php
    require_once('../php/init.php');
    //session_start();
    if(isset($_GET['page'])){
    include($_GET['page']);
    }

    
    if (!$database->get_connection()){
       die("Conncection failed.");
    }


    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['printProfile']))
    {
      printProfile();
    }

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['getProfile']))
    {
      getProfile();
    }

    function printProfile() {
    $user= new User();
    $username = $_SESSION['user_name'];
    $user->get_user($username);
    $profile = "User Name:".$user->user_name."\n Age:".$user->age."\n Living Area:".$user->living_area."\n Sport:".$user->sport."\n Time Activity:".$user->time_activity;
    $myprofile = fopen("../config/profile/$user->user_name.txt", "w");
    fwrite($myprofile, $profile);
    echo fgets($myprofile);
    $file = file_get_contents('../config/profile/'.$user->user_name.'.txt', true);
    echo $file;
  }

  function getProfile() {
    $file = file_get_contents('../config/profile/'.$_POST['profileName'], true);
    echo $file;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/fakeLoader.min.js"></script>

    <title>e-Sport - Profile</title>
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
            <!--לוגו-->
          <div class="row" >
            <div class="col"> 
            <form action="Profile.php" method="post">
             <input type="submit" name="printProfile" value="Print Profile" />
            </form>
            <form action="Profile.php" method="post">
             <input type="submit" name="getProfile" value="Get profile" />
             <input type="text" name="profileName" hint="Get Profile" />
            </form>

                    <br><br>

                    <div class="container" >
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <p> :בחר את תמונת הפרופיל שלך</p><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" value="Upload Image" name="submit">
            </form>
              <?php
              if(file_exists("../profilePics/".$_SESSION['user_name'].".png"))
                      {
                        $profilePicPath = "../profilePics/".$_SESSION['user_name'].".png";
                        echo '<img src='.$profilePicPath.' alt="Italian Trulli width="200" height="200" "> ';
                      
                      }
             
              
              
              ?>
            
                  </div>
              <img class="img-fluid " alt="health" src="../images/Profile - pics/profile.png" width="600" height="450">
            </div>
          </div>
            <!--פרטים אישיים וסטטיסטיקות-->
          <div class="row" >
            <div class="col" id="personal">
              <h4>My Details</h4>
              <ul>
              <?php
                $name = $_SESSION['user_name'];
                $sql="SELECT * FROM users WHERE user_name='$name'";
                $result=$database->query($sql);
                if (isset($result)){  
                    if ($result->num_rows>0){ 
                        while($row=$result->fetch_assoc()){
                            // echo '<table><tr><th> My Details</th></tr></table>'
                            echo '<li><i><b>User Name: </b>'.$row['user_name'].'</i></li>';
                            echo '<li><i><b>Age: </b>'.$row['age'].'</i></li>';
                            echo '<li><i><b>Living Area: </b>'.$row['living_area'].'</i></li>';
                            echo '<li><i><b>Sport Field: </b>'.$row['sport'].'</i></li>';
                        }
                    }
                }
                ?>
                </ul>
            </div>
            
            <div class="col" id="stats">
              <h4>Statistics</h4>
              <ul>
              <?php
                $result=$database->query("select video_name ,sum(rate) as rate from feedback group by video_name order by rate desc limit 1;");
                if (isset($result)){
                    if ($result->num_rows>0){ 
                        while($row=$result->fetch_assoc()){
                            echo '<li><i><b>Best Video: </b>'.$row['video_name'].'</i></li>';
                        }
                    }
                }
                $result=$database->query("select round(avg(price),1) as avg from balls;");
                if (isset($result)){
                    if ($result->num_rows>0){ 
                        while($row=$result->fetch_assoc()){
                            echo '<li><i><b>Avg Balls price: </b>'.$row['avg'].'</i></li>';
                        }
                    }
                }
                $result=$database->query("select count(*) as count from users;");
                if (isset($result)){
                    if ($result->num_rows>0){ 
                        while($row=$result->fetch_assoc()){
                            echo '<li><i><b>Total Users: </b>'.$row['count'].'</i></li>';
                        }
                    }
                }
                $result=$database->query("select round (avg(age),0) as avg from users;");
                if (isset($result)){
                    if ($result->num_rows>0){ 
                        while($row=$result->fetch_assoc()){
                            echo '<li><i><b>Average users age: </b>'.$row['avg'].'</i></li>';
                        }
                    }
                }
                    
                    
                
                ?>
                </ul>
            </div>
          </div>
          
          
            <!--הצעת קבוצה רלוונטית-->
          <div class="row" >
            <div class="col" id="connect">
                 <?php
                $name = $_SESSION['user_name'];
                $sql="SELECT sport,living_area FROM users WHERE user_name='$name'";
                $result=$database->query($sql);
                if (isset($result)){  
                    if ($result->num_rows>0){ 
                        while($row=$result->fetch_assoc()){
                            // echo $row['sport'];
                            $sport=$row['sport'];
                            $location=$row['living_area'];
                        }
                    }
                }
                
                $sql="SELECT * FROM social WHERE sport='$sport' and location='$location'";
                $result=$database->query($sql);
                if (isset($result)){  
                    if ($result->num_rows>0){ 
                        while($row1=$result->fetch_assoc()){
                            $name=$row1['group_name'];
                            $sport1=$row1['sport'];
                            $parti=$row1['num_participate'];
                            $time=$row1['time_activity'];
                            $phone=$row1['phone'];
                            $location=$row1['location'];
                        }
                    }
                }
                
                ?>
              <div id="running" class="data">
                <p class="image img-fluid"><img src="../images/Profile - pics/social-group.png" width="300" height="230"></p>
                <p class="group"><b>Group Name</b><span class="details"><?php echo $name ?></span></p>
                <p class="group"><b>Sport Field</b><span class="details"><?php echo $sport1 ?></span></p>
                <p class="group"><b>Participates</b><span class="details"><?php echo $parti ?></span></p>
                <p class="group"><b>Phone Numnber</b><span class="details">0<?php echo $phone ?></span></p>
                <p class="group"><b>Location</b><span class="details"><?php echo $location ?></span></p>
              </div>
            
            </div>
          </div>
            <!--עוגות-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
    
                function drawChart() {
    
                   var data = google.visualization.arrayToDataTable([
                        ['Sport', 'Hours per Day'],
                        <?php
                            $sql="SELECT sport,count(*) as num FROM users group by sport";
                            $result1=$database->query($sql);
                            while($row = mysqli_fetch_array($result1)){
                                echo "['".$row["sport"]."',".$row["num"]."],";
                            }
                        ?>
                    ]);
    
                    var options = {
                    title: 'Division by type of Sport'
                    };
    
                    var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
    
                    chart.draw(data, options);
                }
            </script> 
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
    
                function drawChart() {
    
                   var data = google.visualization.arrayToDataTable([
                        ['Sport', 'Hours per Day'],
                        <?php
                            $sql="SELECT living_area,count(*) as num FROM users group by living_area";
                            $result1=$database->query($sql);
                            while($row = mysqli_fetch_array($result1)){
                                echo "['".$row["living_area"]."',".$row["num"]."],";
                            }
                        ?>
                    ]);
    
                    var options = {
                    title: 'Division by type of Living Area'
                    };
    
                    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
    
                    chart.draw(data, options);
                }
            </script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
    
                function drawChart() {
    
                   var data = google.visualization.arrayToDataTable([
                        ['Sport', 'Hours per Day'],
                        <?php
                            $sql="SELECT time_activity,count(*) as num FROM users group by time_activity";
                            $result1=$database->query($sql);
                            while($row = mysqli_fetch_array($result1)){
                                echo "['".$row["time_activity"]."',".$row["num"]."],";
                            }
                        ?>
                    ]);
    
                    var options = {
                    title: 'Division by type of Time Activity'
                    };
    
                    var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
    
                    chart.draw(data, options);
                }
            </script>
            
            
            <div style="margin-top: 10%;">
                <div class="pie" id="piechart1" style="width: 700px; height: 300px;"></div>
                <div class="pie" id="piechart2" style="width: 700px; height: 300px;"></div>
                <div class="pie" id="piechart3" style="width: 700px; height: 300px;"></div>
            </div>

        </main>  

        <footer id="footer" class="mt-4">
              
        </footer>
      </div>  
    </section>
  </body>
</html>