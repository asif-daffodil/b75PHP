<?php  
    class myClass {
        private string $myProperty = "My Text";
        public function __destruct()
        {
            echo "Amit er computer on hocche";
        }
        public function amit()
        {
            return "amit ekhon class e probesh kore obak hoye gese! <br />";
        }
        public function __construct()
        {
            echo "Ha ha ha ".$this->myProperty."<br />";
        }
    }
    $myObj = new myClass;
    echo $myObj->amit()
?>