<?php 
    /* Arithmetic operators
     * +
     * -
     * *
     * /
     * %
     * **
     */

     /* Assignment operators
      * =
      * +=
      * -=
      * *=
      * /=
      * %=
      */

      $x = 5;
      $x += 2; //$x = $x + 2 \ $x = 5 + 2 \ $x = 7
      $x -= 1; //$x = $x -1 \ $x = 7 - 1 \ $x = 6
      $x *= 3; //$x = $x * 3 \ $x = 6 * 3 \ $x = 18
      $x /= 2; //$x = $x / 2 \ $x = 18 / 2 \ $x = 9
      $x %= 4; //$x = $x % 4 \ $x = 9 % 4 \ $x = 1
      echo $x."<br>";
      /* Comparison operators
       * ==
       * === 
       * <
       * >
       * >=
       * <=
       * !=
       * !==
       * <>
       * <=>
       */ 

    /* Increment/Decrement operators
     * ++
     * --
     */
    
    //pre-Increment/Decrement operator
     echo ++$x."<br>".--$x."<br>";

     //post-Increment/Decrement operator
     echo $x++."<br>".++$x."<br>";
     $x++;
     echo $x;
     
    /* String operators
     * .
     * .=
     */ 

     $fullName = "Asif";
     $fullName .= " Abir";
     echo "<br>".$fullName;

    /* Logical operators
     * and
     * &&
     * or
     * ||
     * xor
     */  

?>