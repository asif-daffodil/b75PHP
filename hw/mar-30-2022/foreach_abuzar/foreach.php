<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>

    <style>
        body{
            background-color: thistle;
            margin: 5% 10% auto;

            
        }
        button{
            background-color:tomato;
            color: white;
            border-radius: 15px;
            border: 0.5px solid #000;
            width: 100px;
            height: 30px;
        }
        button:hover{
            background-color:teal;
        }
    </style>
</head>
<body>



<?php
$subj = $_GET['subj'] ?? "Personal_Data";
$method = $_GET['method'] ?? 'php:'."<br>";
echo "Let's introduce with the following $subj by using $method";
$HomeName = basename($_SERVER['PHP_SELF']);

?>
<br>
<a href='<?= "./$HomeName" ?> '>
<button>All Clear</button>
</a>
<br><br>
<a href='<?= "./$HomeName?cities"?>' >
<button> City Names </button>
</a>
<br>
<?php
   if(isset($_GET['cities'])) {
    $cities = ["Dhaka", "Bogura", "Joypurhat", "Netrokona"];
    foreach($cities as $cit) {
        echo strtoupper($cit).", ";
    }
       
   }

   echo "<br>";
   echo "<br>";
?>

<a href='<?= "./$HomeName?Personal_Data"?>' >
  <button>Our Lecturer</button>

</a>


<?php
echo "<br>";
   if(isset($_GET['Personal_Data'])) {
    $personData = ["name"=>"Asif Abir", "age"=>35, "city"=>"Dhaka", "profession"=>"Teacher", "gender"=>"Male"];
    foreach($personData as $inName => $personDetail) {
    echo strtoupper($inName)." : ".$personDetail."<br>";
 }
       
}
?>




    
</body>
</html>











