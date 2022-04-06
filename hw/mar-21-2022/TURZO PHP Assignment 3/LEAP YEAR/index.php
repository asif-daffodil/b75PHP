<?php
// PHP code to check if a given
// year is leap year
 
function checkYear($year)
{
    // If a year is multiple of 400,
    // then it is a leap year
    if ($year % 400 == 0)
        print("Leap Year");
         
    // Else If a year is multiple of 100,
    // then it is not a leap year
    else if ($year % 100 == 0)
        print("Not a Leap Year");
             
    // Else If a year is multiple of 4,
    // then it is a leap year
    else if ($year % 4 == 0)
        print("Leap Year");
         
    else
        print("Not a Leap Year");
}
 
// Driver code
$year = 2000;
 
checkYear($year);
     
?>