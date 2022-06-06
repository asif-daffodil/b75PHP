<?php  
    session_start();

    $_SESSION['uemail'] = "abir@dipti.com.bd";
    $email = "abir@dipti.com.bd";
    
    echo $_SESSION['uemail'];
    echo "<br>";
    echo $email;
?>