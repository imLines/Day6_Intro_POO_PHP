<?php 

/*Déclarer une variable $heure qui contient la valeur de type integer de votre choix compris entre 0 et 24. Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.*/


$heure = 12;

if($heure <= 12 && $heure >= 8){
    echo "C'est le matin";
} elseif($heure > 12 && $heure <= 21){
    echo "C'est l'après midi";
} elseif($heure > 21 || $heure < 8){
    echo "C'est la nuit";
}