<?php 
echo "Config FonctionSimple importé <br>";

function plusGrandNombreEntreDeux($variable,$nombre) {
    Bprint("mes nombres --> ".$variable." et ".$nombre,"i");
if ($nombre < $variable) {
    Bprint("le plsu grand nombre est ".$variable,"i");
} else {
    Bprint("le plsu grand nombre est ".$nombre,"i");
}
}

function plusPetitNombreEntreTrois($variable,$nombre,$xxxx) {
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
}

function DeuxNombreEgaux($variable,$nombre) {
    Bprint("mes nombres --> ".$variable." et ".$nombre,"i");
    if ($nombre == $variable) {
        Bprint("les nombre sont égaux a".$variable,"i");
        return true;
    } else {
        Bprint("les deux nombre ne sont pas égaux","r");
        return false;
    }
}

function factoriel($nombre) {
    $result =1;
    if ($nombre == 0) {
        Bprint("Votre nombre est égal 0 noobs ","i");
    } else {
        Bprint("mes nombres --> ".$nombre,"i");
        for($i=0; $i < $nombre; $i++) {
            $result = $result * ($nombre-$i);
        }
        Bprint("le résultat est ".$result,"");
    }
    return $result;
}

function afficherTable($nombre) {
    Bprint("mes nombres --> ".$nombre,"i");
    for($i=1; $i < 11; $i++) {
        Sprint($nombre."x".$i."=".$nombre*$i);
    }
}

function resultatBaccalauréat($moyenne) {
    Bprint("ma moyenne --> ".$moyenne,"i");
    if ($moyenne < 8) {
        Bprint("Vous n'avez pas le BAC ni de rattrapage avec ".$moyenne,"r");
    } else if ($moyenne < 10){
        Bprint("Vous allez au rattrapage avec ".$moyenne,"w");
    }else if ($moyenne < 12){
        Bprint("Vous avez le bac sans mention avec".$moyenne,"b");
    }else if ($moyenne < 14){
        Bprint("Vous avez le bac avec mention asser bien avec".$moyenne,"i");
    }else if ($moyenne < 16){
        Bprint("Vous avez le bac avec mention bien avec ".$moyenne,"i");
    }else if ($moyenne < 18){
        Bprint("Vous avez le bac avec mention très bien avec ".$moyenne,"i");
    }else if ($moyenne < 20){
        Bprint("Vous avez le bac avec mention EXECELLECE avec ".$moyenne,"i");
    }
}

?>