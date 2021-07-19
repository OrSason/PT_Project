<?php
    $DB_Host = "localhost";
    $DB_User = "admin";
    $DB_Pass = "pass1234";
    $DB_Name = "PT_project";


    // Create connection
    $conn = new mysqli($DB_Host, $DB_User, $DB_Pass, $DB_Name);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if(isset($_POST['signup'])){
        //אם לא מכיל שם
        if (!$_POST['user_name']){
            $error='UserName is required';
            echo "<script>alert('UserName is required');</script>"; 
        }
        //אם לא מכיל סיסמה
        else if(!$_POST['password']){
            $error='Password is required';
            echo "<script>alert('Password is required');</script>"; 
        }
        //אם לא מכיל גיל
        else if(!$_POST['age']){
            $error='Age is required';
            echo "<script>alert('Age is required');</script>"; 
        }
        //אם מכיל גיל שלילי
        else if($_POST['age']<=0){
            $error='Your age is not possible!!';
            echo "<script>alert('Your age is not possible!! try again.');</script>"; 
        }
        //אם לא מכיל אזור מגורים
        else if(!$_POST['living_area']){
            $error='Living Area is required';
            echo "<script>alert('Living Area is required');</script>"; 
        }
        //אם לא מכיל ספורט
        else if(!$_POST['sport']){
            $error='Sport is required';
            echo "<script>alert('Sport is required');</script>"; 
        }
        //אם לא מכיל זמן פעילות
        else if(!$_POST['time_activity']){
            $error='Time Activity is required';
            echo "<script>alert('Time Activity is required');</script>"; 
        }
        else{
            $user_name=$_POST["user_name"];
            $password=$_POST["password"];
            $age=$_POST["age"];
            $living_area=$_POST["living_area"];
            $sport=$_POST["sport"];
            $time_activity=$_POST["time_activity"];
            
            
            
            $finalPassword= md5($user_name.$password);
            
        
            $sql = "INSERT into users(user_name,password,age,living_area,sport,time_activity) values ('".$user_name."','".$finalPassword."','".$age."','".$living_area."','".$sport."','".$time_activity."')";
            if ($conn->query($sql)==NULL){
                echo "<script>alert('$conn->error');</script>"; 
                header('Location: ../index.php');
            }
            
            ?>
            <script>alert('Feedback uplaoded');</script>
            <?php

            sleep(2);
            header('Location: ../index.php');
            
            $conn->close();
            
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/SignUp.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/fakeLoader.css">

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2ht`0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../js/fakeLoader.min.js"></script>

        
        <title>e-Sport - SignUp</title>
    </head>

    <body>
        <section id="background">
            <div class="container" id="page" >
                <main class="pl-5 pr-5 mb-3 pt-3" id="main">
                    
                    <div class="row img-fluid" id="logo">
                        <img src="../images/logo2.png" class="img-fluid" alt="Logo" width="100" height="100">
                    </div>

                    <div class="row mb-4" id="join" style="border-bottom: double 4px;">
                        <h1>Join Us</h1>
                    </div>

                    <form method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_name"  placeholder="Enter User Name">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        </div>
                        
                        <div class="form-group">
                            <input type="number" class="form-control" name="age" placeholder="Enter Age">
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="living_area">
                                <option disabled hidden selected value="">Choose Living Area</option>
                                <option>Gush-Dan</option>
                                <option>HaSharon</option>
                                <option>HaShfela</option>
                                <option>Haifa</option>
                                <option>Beer-Sheva</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="sport">
                                <option disabled hidden selected value="">Choose Sport Field</option>
                                <option>Running</option>
                                <option>Football</option>
                                <option>BasketBall</option>
                                <option>Tennis</option>                        
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="time_activity">
                                <option disabled hidden selected value="">Choose Activity Time</option>
                                <option>Morning</option>
                                <option>Noon</option>
                                <option>Afternoon</option>
                                <option>Evening</option>                        
                            </select>
                        </div>
                        

                        <button type="submit" name="signup" class="btn btn-primary">Register</button>
                    </form>
                </main>  
            </div>  
          </section>
    </body>
</html>