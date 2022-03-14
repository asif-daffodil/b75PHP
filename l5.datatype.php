<?php  
    //string
    $x = "This is a text";
    var_dump($x);
    echo "<br>";

    //integer
    $x = 123;
    var_dump($x);
    echo "<br>";

    //float
    $x = 123.56;
    var_dump($x);
    echo "<br>";

    //boolean
    $x = false;
    var_dump($x);
    echo "<br>";

    //array
    $x = ["Dhaka", "CTG", "Khulna"];
    var_dump($x);
    echo "<br>";

    //null
    $x = null;
    var_dump($x);
    echo "<br>";

    //object
    class objClass {
        public $objPro = "This is a text";
    }
    $x = new objClass;
    var_dump($x);
    echo "<br>";

    //resource
?>