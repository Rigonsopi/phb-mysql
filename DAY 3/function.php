<?php

function helloWorld(){
    echo "Hello world";
}

helloWorld();

function sum(){
    $value = 120 + 20;
    echo $value;
}

function maximum($x, $y){
    if($x > $y){
        return $x;
    }else{ 
        return $y;
    }
}

$a = 10;
$a = 20;

$test = maximum($a, $b);
echo "the bigger number was $test";


?>