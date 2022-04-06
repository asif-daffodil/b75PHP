<?php 

$countries= [
    "names" => ["Bangladesh", "India", "Pakistan", "USA", "England", "Canada", "Rasia"], 
    "capitals" => ["Dhaka", "New Dillih", "Islamabad", "Washington DC", "London", "Ottawa","Mosko"], 
    "continents" => ["Asia", "Asia", "Asia", "America", "Europe", "America", "Asia"]
];

foreach ($countries as $desh => $country){
    foreach ($country as $data){
        echo $desh." : ".$data." ";
    }
    echo "<br>";
}

?>