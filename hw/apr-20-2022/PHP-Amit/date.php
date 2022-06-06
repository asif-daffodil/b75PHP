<?php
$startDate = strtotime("next friday");
$endDate = strtotime("+7 days", $startDate);
while ($startDate <= $endDate) {
   echo date("F-d-Y l", $startDate)."<br>";
   $startDate = strtotime("+1 days", $startDate);
}
?>