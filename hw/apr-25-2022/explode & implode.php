<?php 
$city = ["Dhaka","Barishal","Rajshahi","Khulna","Bogura","Rongpur","Dinajpur","Chittagong"];
echo implode("<br>", $city)."<br>";
$dbData = implode(",", $city);
$dbArray = explode(",", $dbData);
var_dump($dbArray);
echo "<br>";
foreach ($dbArray as $myArray) {
    echo $myArray."<br>";
}
?>