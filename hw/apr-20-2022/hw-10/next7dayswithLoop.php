<?php 

$begin_date = strtotime("+1 days");
$end_date = strtotime("+6 day", $begin_date);

while ($begin_date <= $end_date) {
    echo date("F-d-Y l", $begin_date)."<br>";
    $begin_date = strtotime ("+1 day", $begin_date);
} 

?>