<?php
    include("../config/fonction.php");
    include("../config/fonctionSimple.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURS PHP</title>
    <link href="../config/cssFunction.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- <style>p {background-color: green;}</style> -->
    <h1>cours de php</h1>
    <h3>13/09/2023 TO</h3>
    <p class="verificationCSS">Vérification CSS se text est beau</p>

<div class="GrosseBoite"> 
<div class="petitebox">
<h2>TUTO</h2>
<?php 
$chiffre = 5;
$var = 3;
echo "addition : ".$chiffre + $var , "<br>";
echo "Multiplication : ".$chiffre * $var * 9 * 6 * 2 , "<br>" ;
echo "Division : ".$chiffre / $var , "<br>";
echo "modulo reste : ".$chiffre % $var , "<br>";
Bprint("helloo","i");
?>
</div>

<div class="petitebox">
<h2>EXO 1</h2>
<h4>Afficher le plus grand nombre de 2 nombres</h4>
<?php 
plusGrandNombreEntreDeux(13, 56);
?>
</div>


<div class="petitebox">
<h4>Afficher le plus petit nombre de 3 nombres</h4>
 <?php 
plusPetitNombreEntreTrois(78,13,907);
?> 
</div>

<div class="petitebox">
<h4>dire si deux nombre sont égaux</h4>
<?php 
DeuxNombreEgaux(11,78);
?>
</div>


<div class="petitebox">
<h4>écrire le factoriel d'un nombre</h4>
<?php 
factoriel(6);
?>
</div>

<div class="petitebox">
<h4>affiché la table de Multiplication de 16</h4>
<?php 
afficherTable(16);
?>
</div>

<div class="petitebox">
<h4>Apartir d'une moyenne affiche le résultat du baccalauréat</h4>
<?php 
resultatBaccalauréat(13);
?>
</div>


</div>

</body>
</html>