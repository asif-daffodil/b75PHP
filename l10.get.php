<?php
    $city = $_GET['city'] ?? "Dhaka";
    $age = $_GET['age'] ?? 25;
    echo "Your age is $age and your city is $city <br>";
    $currentFileName = basename($_SERVER['PHP_SELF']);
?>

<a href='<?= "./$currentFileName?age=45&city=Khulna" ?>'>
    <button>Age 45 and City Khulna</button>
</a>
<a href='<?= "./$currentFileName?age=23&city=Bogura" ?>'>
    <button>Age 23 and City Bogura</button>
</a>
<a href='<?= "./$currentFileName" ?>'>
    <button>Default</button>
</a>
<a href='<?= "./$currentFileName?namta=2" ?>'>
<button>Dui ghorer namta</button>
</a>
<br>
<?php  
    if (isset($_GET['namta'])) {
        $ghor = $_GET['namta'];
        for ($increment = 1;  $increment <= 10; $increment++) {
        echo $ghor." x ".$increment." = ".$ghor*$increment."<br>";
    }
    }
?>