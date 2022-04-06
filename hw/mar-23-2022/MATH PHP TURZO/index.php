<?php  
    function byRef($x, &$a, &$b)
{
    $a = 10 * $x;
    $b = 100 * $x;
}

$a = 0;
$b = 0;

byRef(10, $a, $b);

echo $a . "\n";
echo $b;
?>

