<?php  
    class myClass {
        public static string $myPro = "This is a message!";

        private function __construct ()
        {
            return ;
        }
    }

    // $myObj = new myClass;
    // echo "<br>";
    // echo $myObj->myPro;
    // echo "<br>";

    // $hackerObj = new myClass;
    // $hackerObj->myPro = "Your wehsite is hacked!";
    // echo $hackerObj->myPro;
    echo myClass::$myPro;
?>