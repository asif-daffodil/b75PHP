<?php

use myClass as GlobalMyClass;

    class myClass {
        public const myCon = "Hello World<br>";
        public string $myPro;
        public static string $ending = "...";
        public function __construct()
        {
            myClass::$ending = "---";
            $this->myPro = myClass::myCon.myClass::$ending;
            echo "Amar Bangladesh <br>";
        }
    }
    $myObj = new myClass;
    echo $myObj::myCon;
    echo $myObj->myPro;
    echo $myObj::$ending;
?>