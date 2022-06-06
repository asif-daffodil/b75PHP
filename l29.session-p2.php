<?php  
    session_start();
    echo $_SESSION['uemail'];
    // echo $email;
    session_unset();
?>