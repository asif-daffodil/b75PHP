<?php 
 $a     = 'family';
 $family = 'father';
 $father = 'mainCharacter';
 $mainCharacter = 'mother';
 $mother = 'home';
 $home = 'children';
 $children = 'wonderful_family';



 echo "Something about a"." ".$children.":"."<br>";
 echo $family." is the bachbone of a"." ".$a ."<br>";
 echo $mainCharacter." is the true queen of every"." ".$mother."<br>";
 echo $home." "."are everything for"." ".$family." "."and"." ".$mainCharacter;

 echo '<br>';
 echo '<br>';

 echo "Something about a"." ".$a.":"."<br>";
 echo $$a." is the bachbone of a"." ".$a ."<br>";
 echo $$$$a." is the true queen of every"." ".$$$$$a."<br>";
 echo $$$$$$a." "."are everything for"." ".$$a." "."and"." ".$$$$a;



?>