<?php
    require_once('../php/init.php');
   // session_start();
   $user=new User();
   $users = $user->fetch_users()
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
    
                <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
            </style>
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
          
        </header>

        <main id="main">
          <div class="sticky-top" id="navbar">
            
          </div>
                        <br><br>
          <form method="post">
          <input class="btn btn-outline-dark" name="printUsers" type="submit" value="Print Users" style="margin-left: 30px;">
          <br><br>
          <input class="btn btn-outline-dark" name="deleteUsers" type="submit" value="Delete User" style="margin-left: 30px;">
          <label for="username">Username:</label>
         <input type="text" id="username" name="username" ><br>
   
        </form>


                        <br><br>
         
        <?php
        

        if(isset($_POST['printUsers'])) {

             echo '<table>
             <tr>
               <th>Username</th>
               <th>Age</th>
               <th>Activity</th>
               <th>Admin user</th>
             </tr>';
            foreach ($users as $user) {
                echo '<tr>';
                echo '<th>'.$user->user_name.'</th>';
                echo '<th>'.$user->age.'</th>';
                echo '<th>'.$user->time_activity.'</th>';
                echo '<th>'.$user->isAdmin.'</th>';
                echo '</tr>';
            } 
            echo '</table>';
        }
        if(isset($_POST['deleteUsers'])) {
            $user->delete_user($_POST["username"]);
        }
        
        
        
        ?>


        
        
        </main>  

        <footer id="footer" class="mt-4">
                
        </footer>
      </div>  
    </section>


  </body>
 
</html>