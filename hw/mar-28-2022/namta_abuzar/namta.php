<?php
$subj = $_GET['subj'] ?? "Multiplication_Table";
$method = $_GET['method'] ?? 'php:'."<br>";
echo "Let's learn $subj using $method";
$HomeName = basename($_SERVER['PHP_SELF']);

?>
<br>
<a href='<?= "./$HomeName" ?> '>
<button>Home</button>
</a>
<br><br>
<a href='<?= "./$HomeName?namta2=2"?>' >
<button> M_Table: 2 </button>
</a>
<br>
<?php
   if(isset($_GET['namta2'])) {
       $ghor = $_GET['namta2'];
       for ($increment = 1; $increment <= 10; $increment++){
           echo $ghor. " x ".$increment. " = ".$ghor*$increment. "<br>";
       }
   }
?>
<br>
<a href='<?= "./$HomeName?namta3=3"?>' >
<button> M_Table: 3 </button>
</a>
<br>
<?php
   if(isset($_GET['namta3'])) {
       $ghor = $_GET['namta3'];
       for ($increment = 1; $increment <= 10; $increment++){
           echo $ghor. " x ".$increment. " = ".$ghor*$increment. "<br>";
       }
   }
?>
<br>
<a href='<?= "./$HomeName?namta4=4"?>' >
<button> M_Table: 4 </button>
</a>
<br>
<?php
   if(isset($_GET['namta4'])) {
       $ghor = $_GET['namta4'];
       for ($increment = 1; $increment <= 10; $increment++){
           echo $ghor. " x ".$increment. " = ".$ghor*$increment. "<br>";
       }
   }
?>

<br>
<a href='<?= "./$HomeName?namta50=50"?>' >
<button> M_Table: 50 </button>
</a>
<br>
<?php
   if(isset($_GET['namta50'])) {
       $ghor = $_GET['namta50'];
       for ($increment = 1; $increment <= 10; $increment++){
           echo $ghor. " x ".$increment. " = ".$ghor*$increment. "<br>";
       }
   }
?>