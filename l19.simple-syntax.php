<?php  
    $name = "Asif";
    $$name = "Abir";
    echo "His name is $name ${$name} <br>";

    $d = "day";
    $ws = ['Sun', 'Mon', 'Tues', 'Wednes', 'Thurs', 'Fri', 'Satter'];
    foreach($ws as $w){
        ${$w} = "$w${d}<br>";
        $week[] =  ${$w};
    }
    echo "<pre>";
    print_r($week);
    echo "</pre>";
    echo "<pre>";
    print_r(array_map("myFunc", $week));
    echo "</pre>";
    function myFunc ($data) {
        return strtoupper($data);
    }
?>