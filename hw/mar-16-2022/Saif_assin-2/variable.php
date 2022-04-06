<?php
    $x = "Bangladesh";
    $y = 123;
    $z = 0.5;
    $a = "234";
    $b = "False";
    $c = false;
    $d = "null";
    $e = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background: silver;
            width: 300px;
            margin: auto;
            text-align: center;
            line-height: 25px;
            border: 3px groove gray;
            border-radius: 8px;
        }
    </style> 
</head>
<body>
    <div>
    <H2 style="color:darkred; text-align: center;">PHP Datatype Check</H2>
        <?php 
            echo gettype($x). "<br>";
            echo gettype($y). "<br>";
            echo gettype($z). "<br>";
            echo gettype($a). "<br>";
            echo gettype($b). "<br>";
            echo gettype($c). "<br>";
            echo gettype($d). "<br>";
            echo gettype($e). "<br>";
        ?>
    </div>
</body>
</html>

    
