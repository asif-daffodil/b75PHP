<?php  
    $x = 0;
    
    //while loop
    while ($x < 10){
        echo $x.", ";
        $x++;
    }

    echo "<hr>";
    $ghor = 5293;
    $increment = 1;
    // 2 x 1 = 2
    while ($increment <= 10) {
        echo $ghor." x ".$increment." = ".$ghor*$increment."<br>";
        $increment++;
    }

    echo "<hr>";

    $y = 9;
    while ($y >= 0) {
        echo $y."<br>";
        $y--;
    }

    echo "<hr>";
    //for loop
    for ($i = 0; $i < 10; $i++) {
        echo $i.", ";
    }
    echo "<hr>";
    $ghor = 100;
    for ($increment = 1;  $increment <= 10; $increment++) {
        echo $ghor." x ".$increment." = ".$ghor*$increment."<br>";
    }
    echo "<hr>";
    //do while
    $a = 20;
    do {
        echo $a;
        $a++;
    }while ($a < 10);

    //foreach
?>