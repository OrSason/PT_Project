<?php

$DB_Host = "localhost";
$DB_User = "admin1234";
$DB_Pass = "pass1234";
$DB_Name = "PT_project";

    // Create connection
    $conn = new mysqli($DB_Host, $DB_User, $DB_Pass, $DB_Name);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $name=$_POST["name"];
    $date=$date = date('Y-m-d H:i:s');
    $video_name=$_POST["video_name"];
    $message=$_POST["message"];
    $rate=$_POST["rate"];

    $sql = "INSERT into feedback(name,date,video_name,message,rate) values ('".$name."','".$date."','".$video_name."','".$message."','".$rate."')";

    if(isset($_POST['commentSubmit'])){    
        if ($conn->query($sql)==FALSE){
            echo "<script>alert('$conn->error');</script>"; 
            exit();
        }
        
        header('Location: ../includes/HomePage.php');
        ?>
        <script>alert('Feedback uplaoded');</script>
        <?php

    $conn->close();

    }
    
?>



