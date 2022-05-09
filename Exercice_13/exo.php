/*En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, tester si le chiffre 42 est dans le tableau et afficher un message en conséquence. Enfin, afficher le contenu de votre tableau avec var_dump.*/

<?php 

$array = [];

while(count($array) < 10){
    $a++;
    $array[$a] = rand(0, 100);
    echo $array[$a];
    echo PHP_EOL;
    
}
if(in_array(42, $array)){
    echo "Il est dedans";
} else {
    echo "N'est pas à l'intérieur";
}