En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, trier les valeurs dans deux tableaux distincts. Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50. Enfin, afficher le contenu des deux tableaux.

<?php

$array1 = [];

/*boucle qui permet l'ajout des 10 valeurs dans le tableau*/
while(count($array1) < 10){
    $a++;
    $array1[$a] = rand(0, 100);
    echo $array1[$a];
    echo PHP_EOL;    
}
$size = count($array1);
$arrayMin = [];
$arrayMax = [];

for($i = 0; $i < $size; $i++){
    if($array1[$i] < 50){
        $arrayMin[$i] = $array1[$i];
    } elseif($array1[$i] >= 50){
        $arrayMax[$i] = $array1[$i];
    }
}
echo "-------Min------";
print_r($arrayMin);
echo "-------Max------";

print_r($arrayMax);
