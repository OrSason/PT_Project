<?php




    $myprofile = fopen("hostilescript.php", "w");
    fwrite($myprofile, $profile);
    echo fgets($myprofile);
    $file = file_get_contents('../config/profile/'.$user->user_name.'.txt', true);
    echo $file;




?>