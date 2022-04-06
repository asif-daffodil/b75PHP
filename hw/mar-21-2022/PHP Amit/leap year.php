<?php 
$year = 1903;
if($year%4 == 0 and $year%100 !=0 or $year%400 == 0){
    echo "$year is Leap Year";
}
else{
    echo "$year is not Leap Year";
}


?>