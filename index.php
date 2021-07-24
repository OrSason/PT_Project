
<?php
    require_once('../PT_Project/php/init.php');
    global $session;
    if ($session->signed_in){
        header('Location: ../PT_Project/includes/HomePage.php');
        exit;
    }
    $error='';
    //אם הכפתור לא נלחץ
    if(isset($_POST['submit'])){
        //אם לא מכיל שם
        if (!$_POST['user_name']){
            $error='User is required';
            echo "<script>alert('User is required');</script>"; 
        }
        //אם לא מכיל סיסמה
        else if(!$_POST['password']){
            $error='Password is required';
            echo "<script>alert('Password is required');</script>"; 
        }
        //בהנחה ומילאו את כלל הפרטים בכניסה ניצור אובייקט יוזר ונשתמש במתודה
        else{
            $user_name=$_POST['user_name'];
            $password=$_POST['password'];


            $str = '../PT_Project/includes/HomePage.php?username='.$user_name;
            $user=new User();
        
            $finalPassword= md5($user_name.$password);

            $error=$user->find_user_by_name($user_name,$finalPassword);
            //אם אין בעיה כלשהי ניכנס לתנאי נבצע כניסה ונעבור לאינדקס
            if (!$error){
                echo "<script>alert('work');</script>"; 
                $session->login($user);
                header('Location: '.$str);
            }
            else{
                echo "<script>alert('Login Faild.. Invaild UserName or Password.');</script>"; 
            }
    
        }
    }
    
?>



<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../PT_Project/css/Login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2ht`0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function signup(){
            window.location='../PT_Project/includes/SignUp.php';

        }
    </script>
    <title>e-Sport - Login</title>
</head>

<body>
<section id="main">
<form method="POST">
  <div class="imgcontainer">
      <img class="img-fluid" src="../PT_Project/images/logo2.png" alt="Avatar" width="200" height="100">
  </div>

  <div class="container">

    <input type="text" id="txt" placeholder="Enter Username" name="user_name">
    <input type="password" id="pas" placeholder="Enter Password" name="password">
       
    <button id="button" type="submit" name="submit">Login</button>
    <input id="button" type="button" onclick="signup()" value="Sign Up">
  </div>

</form>
</section>
   
</body>
</html>
