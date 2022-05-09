<?php

$prix_HT = 50;
$tva = 20;
$prix_ttc = $prix_HT+(($prix_HT * $tva)/100);

echo "Le prix final du produit avec la TVA est de ".$prix_ttc."€";
?>