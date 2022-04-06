<?php 
    //$GLOBALS
    $a = "Aslam";
    $b = "Mia";

    function myFunc () {
        return $GLOBALS['a'] . " " . $GLOBALS['b'];
    }

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";    
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br>";

    echo myFunc();
?>