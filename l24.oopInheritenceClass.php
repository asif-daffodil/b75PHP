<?php  
    class dada {
        public string $dadarJomi = "5 Katha";
    }

    class baba extends dada {
        public string $babarBari = "5 Tala";
    }
    class chacha extends dada {
        public string $chacharBari = "10 Tala";
    }

    class ami extends baba {}

    $myObj = new ami;
    echo $myObj->dadarJomi." ".$myObj->babarBari;
?>