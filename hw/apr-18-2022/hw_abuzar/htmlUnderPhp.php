<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .space{
            margin-right: 12px;
        }
        button{
            background-color: #eee;
            width: 100px;
            height: 30px;
            border-radius: 12px;
            border: 1px solid red;
        }
        button:hover{
            background-color:rosybrown;
        }
    </style>
</head>
<body>

<?php
$home = basename($_SERVER['PHP_SELF']);
$age = $_GET['age'] ?? header("location: $home?age=15");
if($age < 25) {
?>
<h2>Sir Isaac Newton</h2>
    <article>
    Sir Isaac Newton PRS (25 December 1642 – 20 March 1726/27[a]) was an English mathematician, physicist, astronomer, alchemist, theologian, and author (described in his time as a "natural philosopher") widely recognised as one of the greatest mathematicians and physicists of all time and among the most influential scientists. lm Leibniz for developing infinitesimal calculus.
    </article><br>
    <button>Biography</button><br>

<?php }elseif ($age < 30) {  ?>
    
    <h2>Albert Einstein</h2>
<article>Albert Einstein (/ˈaɪnstaɪn/ EYEN-styne;[6] German, 14 March 1879 – 18 April 1955) was a German-born theoretical physicist,[7] widely acknowledged to be one of the greatest and most influential physicists of all time. Einstein is best known for developing the theory of relativity, but he also made important contributions to the development of the theory of quantum mechanics. Relativity and quantum mechanics are together the two pillars of modern physics. His mass–energy equivalence formula <b>E = mc<sup>2</sup></b>, which arises from relativity theory, has been dubbed "the world's most famous equation".</article><br>
<button>Biography</button><br>

<?php }else { ?>
    <h2>Galileo di Vincenzo Bonaiuti de' Galilei</h2>
    <article>Galileo di Vincenzo Bonaiuti de' Galilei, commonly referred to as Galileo, was an Italian astronomer, physicist and engineer, sometimes described as a polymath, from the city of Pisa, then part of the Duchy of Florence.[4] Galileo has been called the "father" of observational astronomy,[5] modern physics,[6][7] the scientific method,[8] and modern science.[9]</article><br>
    <button>Biography</button><br>

<?php } ?>


<br><br> 

<a href="<?= "$home?age=15" ?>">
     <button class="space">Newton</button>
</a> 
<a href="<?= "$home?age=29" ?>">
     <button class="space">Einstein</button>
</a> 
<a href="<?= "$home?age=31" ?>">
     <button class="space">Galileo</button>
</a> 



</body>
</html>


