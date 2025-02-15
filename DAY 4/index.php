<?php 

$sport = array("Football", "Basketball", "Voleyball", "Handball", "Box", "Kickbox"); //array-vargjet
/// echo $sport[0];
//echo implode(" ", $sport )."<br>";
//echo end($sport)."<br>";
//echo count($sport)."<br>";

///for($i = 0; $i < 4; $i++){
///    echo $sport[$i], "\n"
///}    nese e bojna n qit form duhet gjith me rrit numrin kur shtojm elemente,per mos me bo e perdorim ni mmyr tjt qe i numron vet

array_push($sport, "Golf"); //na  mundson me shtu ni element, duhet me kan gjithmon para pjeses tjeter t kodit
array_pop($sport); //e hjekum vleren e fundit
array_unshift($sport, "Tennis"); //e shton elementin ne fillim
array_shift($sport); //e hjekum elementin e par ne varg

$output1 = array_slice($sport,2); //me i marr elementet prej elementit te dyt
var_dump($output1); //tregon cilat elemente jon, pozicionet edhe sa shkronja i kan

$output2 = array_slice($sport,0,3); //i merr krejt perveq 0 dhe 3
var_dump($output2);

//var_dump($sport);

//$len = count($sport);
//for($i = 0; $i < $len; $i++){
//    echo $sport[$i], "\n";
//}

$myvalues = array(12,24,36,48);
var_dump(array_sum($myvalues));



?>