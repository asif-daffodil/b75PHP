<?php 
    function sadik () {
        echo "Sadik is not a bad boy!<br>";
    }

    sadik();

    // return
    function sadd () {
        return "Saad is a good boy!<br>";
    }
    echo sadd();
    echo sadd();

    // parameters arguments
    function ochena ($name) {
        return "$name is a good boy<br>";
    }
    echo ochena ("Kamal");
    echo ochena ("Jamal");

    // multiple parameters
    function rajdhani ($city, $country) {
        return "$city is the capital of $country<br>";
    }
    echo rajdhani ("Dhaka", "Bangladesh");
    echo rajdhani ("Islamabad", "Pakistan");
    echo rajdhani ("New Dillih", "India");

    // pass variables's data
    $n1 = 15;
    $n2 = 16;
    $n3 = 17;
    function kuddus ($a, $b, $c) {
        return $a + $b + $c;
    }
    echo kuddus($n1, $n2, $n3)."<br>";

    //default value
    function jajabor ($himu = "Ami", $boishihto = "jajabor") {
        return "$himu ek $boishihto<br>";
    }

    echo jajabor();
    echo jajabor("Tumi");
    echo jajabor("Shey", "fokir");
?>