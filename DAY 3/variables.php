<?php

$x = 10; //variabel globale tcilen smujna me thirr mrrena funksionit, nese dojna me perdor duhet me shkru fjalen global mrena edhe variablen

function variables(){
    $y = 20; //variabel lokale qe munet me u thirr mrena funksionit
    echo $y;
    global $x
}

variables();
echo "<br> $x"

?>