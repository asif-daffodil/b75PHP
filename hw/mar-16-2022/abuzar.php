<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type</title>
    
    <style>
        #header{
            background-color:black;
            width: 100%;
            height: 40px;
            color: whitesmoke;
            text-align: center;
            font-size: 20px;
            font-weight: bolder;
            padding: auto;
            margin-bottom: 20px;

        }
        #div1 {
            width: 400px;
            height: 400px;
            background-color:yellowgreen;
            margin-left: 20px;
            margin-top: 20px;
            text-align:start;
        
        }

        #table-content{
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
        }
        #table-content thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }
        #table-content th, td{
            padding: 12px, 15px;
        }


    </style>

</head>
<body>
    
</body>
</html>
<div id="div1">
    <div id="header">Datatype</div>

<?php
  $x = "Bangladesh";
  var_dump($x);
  echo $x."<br><br>";

  $y = 123;
  var_dump($y);
  echo $y."<br><br>";

  $z = 0.5;
  var_dump($z);
  echo $z."<br><br>";

  $a = "234";
  var_dump($a);
  echo $a."<br><br>";

  $b = "False";
  var_dump($b);
  echo $b."<br><br>";

  $c = false;
  var_dump($c);
  echo $c."<br><br>";

  $d = "null";
  var_dump($d);
  echo $d."<br><br>";

  $e = null;
  var_dump($e);
  echo $e."<br><br>";

?>

</div>
