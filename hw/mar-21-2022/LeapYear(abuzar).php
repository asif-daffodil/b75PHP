<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>

    <style>
        #main{
            text-align: center;
            width: 40%;
            height: 30px;
            background-color:crimson;
            color: whitesmoke;
            font-weight: 400;
            font-size: 40px;
            margin: 30px auto;
            padding: 25px;
        }

    </style>
</head>
<body>
    
</body>
</html>


<div id="main">
<?php
$year = 1904;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a LEAP YEAR!";    
}
 
else  
{  
echo "$year is not a LEAP YEAR!";    
}

?>

</div>
