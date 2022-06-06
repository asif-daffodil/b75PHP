<?php  
    $city = ["Dhaka", "Bogura", "Joypurhat", "Barishal"];
    // echo $city;
    echo implode("<br>", $city)."<br>";
    // var_dump($city);
    $dbData = implode(",", $city);
    $dbArray = explode(",", $dbData);
    var_dump($dbArray);
    // echo $dbArray;
    echo "<br>";
    foreach($dbArray as $myArray){
        echo $myArray."<br>";
    }
?>