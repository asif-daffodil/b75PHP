<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Convert string to array using php function</h3>
    
</body>
</html>
<?php 
echo 'Method 01: using function: implode/explode'."<br><br>";

 $subjects = ['AI', 'Deep Learning', 'Data Science', 'Machine Learning'];
 echo implode(', ', $subjects);
 echo "<br>";
 echo "<br>";
 $convert = implode(',', $subjects);
 $convert_to_Array = explode(',', $convert);
 var_dump($convert_to_Array);

 echo "<br>";
 echo "<br>";
foreach ($convert_to_Array as $myArray){
    echo $myArray."<br>";
}

echo "<br>";
echo "<br>";

echo 'Method 02: using function: str_split'."<br>";
$str = 'Metaverse';
$arr = str_split($str);
print_r($arr);

echo "<br>";
echo "<br>";

echo 'Method 03: using function: preg_split'."<br>";
# \s White space 
# ,\s Comma followed by white space
# (\s|,\s) split if white space or comma followed by white space
$str1 = 'Fifa World Cup, 2022';
$arr1 = preg_split('/(\s|,\s)/', $str1);
echo var_dump($arr1);

echo "<br>";
echo "<br>";

echo 'Method 04: using function: str_word_count'."<br>";
$str2 = 'Different ways to convert from string to array';
# mode 0 : number of valid words
# mode 1 : returns array of valid words
# mode 2 : returns array of valid words + alongwith the STARTING POSITON
$arr2 = str_word_count($str2, 2);
print_r($arr2)."<br>";



?>