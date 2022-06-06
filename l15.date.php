<?php
    // echo date_default_timezone_get()."<br>";
    date_default_timezone_set("Asia/Dhaka");
    echo date("m/d/y h:i:s a")."<br>";
    echo date("M/d/Y H:i:s")."<br>";
    echo date("F/d/Y")."<br>";
    echo date("F/d/Y D")."<br>";
    echo date("F/d/Y l h:i:s A")."<br>";

    // mktime
    // hour minute second month day year
    $myTime = mktime(23, 24, 25, 9, 10, 2005);
    echo date("F/d/Y l h:i:s A", $myTime)."<br>";

    //strtotime
    echo date("F/d/Y l h:i:s A", strtotime("Next Day"))."<br>";
    echo date("F/d/Y l h:i:s A", strtotime("+15 days"))."<br>";
    echo date("F/d/Y l h:i:s A", strtotime("+7 months"))."<br>";
    echo date("F/d/Y l h:i:s A", strtotime("+3 years +2 months +3 weeks +5 days"))."<br>";

    // next 7 fridays
    $startDate = strtotime("next friday");
    $endDate = strtotime("+6 week", $startDate);
    while ($startDate <= $endDate) {
       echo date("F-d-Y l", $startDate)."<br>";
       $startDate = strtotime("+1 week", $startDate);
    } 
?>