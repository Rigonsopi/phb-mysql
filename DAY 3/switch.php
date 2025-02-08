<?php

$age = 15;

switch($age){
    case ($age >= 0 && $age <18):
        echo "You are a minor <br>";
        break; // ne momentin qe plotsohet kushti i par del prej switch-it me break
    case ($age > 18 && $age <= 25):
        echo "You are a young adult <br>";
        break;
    case ($age > 25):
        echo "You are an adult <br>";    
        break;
    default:
    echo "Invalid age imput <br>"; //kjo vendoset ne rast qe asnejra nga kushtet nuk permbushet    
}


?>