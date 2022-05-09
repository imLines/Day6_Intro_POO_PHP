<?php

/*Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats qui contient la somme de 1 554,76 €. Afficher si le budget permet de payer les achats.*/

$budget = 1553.89;
$achat = 1554.76;
$calc = $budget - $achat;

if($calc > 0){
    echo "Achat possible";
} elseif($calc < 0){
    echo "cet echat n'est pas possible";
}

?>