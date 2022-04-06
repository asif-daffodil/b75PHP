<?php

$countries= [
    'countrys' => ["Bangladesh", "India", "Pakistan", "USA", "England", "Canada", "Russia"],
    'capitals' => ["Dhaka", "New Delhi", "Islamabad", "Washington DC", "London", "Ottawa","Mosko"],
    'continents' => ["Asia", "Asia", "Asia", "America", "Europe", "America", "Asia"]

];


foreach( $countries as $countryIndex => $countryInfo){
  foreach ($countryInfo as $country_data){
     echo ucfirst(substr($countryIndex, 0, -1)). " : ".$country_data."<br>";
 }

 echo "<br>";
}

$p = 0;

for($i = $p; $i < count($countryInfo); $i++) {
    foreach ($countries as $countryIndex => $countryInfo){
        for ($j = $p; $j < $p+1; $j++ ){
            echo ucfirst(substr($countryIndex, 0, -1))." : ".$countryInfo[$j]." ";
        }
  echo "<br>";
}
$p++;
    
}


?>