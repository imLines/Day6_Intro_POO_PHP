En utilisant le tableau ci-dessous, afficher seulement les pays qui ont une population supérieure ou égale à 20 millions d'habitants.

<?php


$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273400,
    'Allemagne' => 82800000,
);

foreach($pays_population as $clef => $valeur){

    if($valeur >= 20000000){
        echo "Le pays ".$clef." à ".$valeur." habitants.";
        echo PHP_EOL;
    }
}

