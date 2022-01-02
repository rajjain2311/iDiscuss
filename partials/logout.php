<?php
 session_start();
    // echo "Logging you out. Please wait....";
 session_destroy();   
 header("Location:/php_project_2/main.php");
header("Location:/php_project_2/main.php?logoutsuccess=true");
?>