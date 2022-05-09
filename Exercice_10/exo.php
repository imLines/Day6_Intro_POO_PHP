<?php


/*
for($v = 1; $v < 6; $v++){
    echo str_repeat($v, $v);
    
    
}


*/
/*
for($v = 1; $v < 6; $v++){
    for($i = 1; $i < 6; str_repeat($v, $i)) {
        echo $v + $i;
    }
    
}
*/


for($a=1;$a<6;$a++) 
{
    
    for ($b=0;$b<$a;$b++)
    echo $a;
    
    echo PHP_EOL;
}
?>