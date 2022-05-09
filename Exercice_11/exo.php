<?php


$number = 0;

while($number < 20){
    if($number == 10){
        echo"<h1>".$number."</h1>";
    } else {
        echo $number;
    }
    $number = $number + 2;
}