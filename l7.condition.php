<?php  
    $age = 20;
    if ($age >= 18) {
        echo "Welcome to our website";
    }else {
        echo "Sorry! you are not allowe dto our website";
    }

    echo "<br>";

    $x = 16;
    $y = "16";

    if ($x === $y) {
        echo "Amar Bangladesh";
    }else{
        echo "joy Bangla";
    }

    echo "<br>";

    if ($x + 4 > 19 || $x - 2 > 15 || $x === $y || $y != $x || $x ) {
        echo "ha ha ha";
    }

   echo "<br>"; 

   $age = 35; 
   
   if($age > 0 && $age <= 12){
       echo "You are a baby";
   }elseif($age > 12 && $age < 20){
        echo "you are a teenager";
   }elseif($age >= 20 && $age < 30){
        echo "you are a young person";
   }elseif($age >= 30 && $age < 50){
        echo "You are a middle aged person";
   }elseif($age >= 50 && $age < 150){
        echo "Your are an old person";
   }else{
       echo "You are not in this world";
   }

   echo "<br>";
   
   //switch

   $city = "Bogura";
   switch ($city) {
       case 'Chottogram':
           echo "Chottogram is a beautiful city";
           break;

       case 'Rajshahi':
           echo "Rajshahi is a beautiful city";
           break;

       case 'Dhaka':
           echo "Dhaka is a beautiful city";
           break;
       
       default:
           echo "Bangladesh is a beautiful country";
           break;
   }
   echo "<br>";
   $x = 15;
   echo $x < 10 ? "Dhaka":"khulna";

   /* if ($x > 10) {
       echo "Dhaka";
   }else{
    echo "khulna";
   } */
   echo "<br>";
   echo $z ?? "Rusia rag korse" ;
?>