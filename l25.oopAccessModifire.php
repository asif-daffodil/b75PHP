<?php  
    class dada {
        public string $dadarJomi = "5 Katha";
        protected int $age = 85;
        private bool $jibito = false;

        public function botGach() :string
        {
            return "Eta ekta public property<br>";
        }
        public function dadaBariFunc()
        {
            return $this->dadarJomi." dadar jomi ase! <br>";
        } 
        public function dadarBoyos() :int
        {
            return $this->age;
        }
        public function dadarObostha () :string
        {
            if($this->jibito){
                return "amar dada ekhono beche achen<br>";
            }
            return "amar dada ar beche nei!<br>";
        }
    }
    $objDada = new dada;
    echo $objDada->botGach();
    echo $objDada->dadaBariFunc();
    // echo $objDada->age;
    // echo $objDada->jibito;
    echo $objDada->dadarBoyos()."<br>";
    echo $objDada->dadarObostha();

    class baba extends dada {
        public string $babarBari = "5 Tala";
    }
    class chacha extends dada {
        public string $chacharBari = "10 Tala";
    }

    class ami extends baba {
        public function amarShompoti () :string 
        {
            return "Amar ".$this->dadarJomi." dadar jomi ase! ebong amar dadar boyosh chilo ".$this->age;
        }
    } 
    $amarObj = new ami;
    echo $amarObj->amarShompoti();
?>