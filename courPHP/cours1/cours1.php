<?php
    include("../config/fonction.php");
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

<h2>EXO 1</h2>
<h4>Afficher le plus grand nombre de 2 nombres</h4>
<?php 
$nombre = 13;
$variable = 56;
Bprint("mes nombres --> ".$variable." et ".$nombre,"i");
if ($nombre < $variable) {
    Bprint("le plsu grand nombre est ".$variable,"i");
} else {
    Bprint("le plsu grand nombre est ".$nombre,"i");
}
?>


<h4>Afficher le plus petit nombre de 3 nombres</h4>
 <?php 
$nombre = 13;
$variable = 56;
$xxxx = 25;
Bprint("mes nombres --> ".$variable." + ".$nombre." + ".$xxxx,"i");
if ($nombre < $variable) {
    if ($nombre < $xxxx) {
        Bprint("le plus petit nombre est ".$nombre,"i");
    } else {
        Bprint("le plus petit nombre est ".$xxxx,"i");
    }
} else {
    if ($variable < $xxxx) {
        Bprint("le plus petit nombre est ".$variable,"i");
    } else {
        Bprint("le plus petit nombre est ".$xxxx,"i");
    }
}
?> 

<h4>dire si deux nombre sont égaux</h4>
<?php 
$nombre = 13;
$variable = 56;
Bprint("mes nombres --> ".$variable." et ".$nombre,"i");
if ($nombre == $variable) {
    Bprint("les nombre sont égaux a".$variable,"i");
} else {
    Bprint("les deux nombre ne sont pas égaux","i");
}
?>



<h4>écrire le factoriel d'un nombre</h4>
<?php 
$nombre = 6;
$result =1;
if ($nombre == 0) {
    Bprint("Votre nombre est égal 0 noobs ","i");
} else {
    Bprint("mes nombres --> ".$nombre,"i");
    for($i=0; $i < $nombre; $i++) {
        $result = $result * ($nombre-$i);
    }
    Bprint("le résultat est ".$result,"i");
}
?>


<h4>affiché la table de Multiplication de 16</h4>
<?php 
$nombre = 16;
Bprint("mes nombres --> ".$nombre,"i");
for($i=1; $i < 11; $i++) {
    Sprint($nombre."x".$i."=".$nombre*$i);
}
?>


<h4>Apartir d'une moyenne affiche le résultat du baccalauréat</h4>
<?php 
$moyenne = 9.45;
Bprint("ma moyenne --> ".$moyenne,"i");
if ($moyenne < 8) {
    Bprint("Vous n'avez pas le BAC ni de rattrapage avec ".$moyenne,"i");
} else if ($moyenne < 10){
    Bprint("Vous allez au rattrapage avec ".$moyenne,"i");
}else if ($moyenne < 12){
    Bprint("Vous avez le bac sans mention avec".$moyenne,"i");
}else if ($moyenne < 14){
    Bprint("Vous avez le bac avec mention asser bien avec".$moyenne,"i");
}else if ($moyenne < 16){
    Bprint("Vous avez le bac avec mention bien avec ".$moyenne,"i");
}else if ($moyenne < 18){
    Bprint("Vous avez le bac avec mention très bien avec ".$moyenne,"i");
}else if ($moyenne < 20){
    Bprint("Vous avez le bac avec mention EXECELLECE avec ".$moyenne,"i");
}
?>

</body>
</html>