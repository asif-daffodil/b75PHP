<?php  
    class amit {
        public string $name = "Amit Ghosh";
        public string $email;

        public function amitEmail ($uEmail)
        {
            $this->email = $uEmail;
            return $this->email;
        }

        public function amitAge ($age) 
        {
            if($age > 18){
                return "You are a young man";
            }
            return "You are not allowed to our website";
        }
    }
    $obj = new amit;
    echo $obj->name."<br />";
    echo $obj->amitEmail("amit74@dipti.com.bd")."<br>";
    echo $obj->amitAge(24)."<br>";

    echo phpversion();
?>