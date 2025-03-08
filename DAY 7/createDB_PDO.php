<?php
//krijimi i ni database prej code
$host = "localhost";
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$host;", $user, $pass);

    $sql = "CREATE DATABASE rigoni";//

    $conn->exec($sql);//

    echo "Database created";
}catch(Exception $e){

    echo "Something went wrong";
}

//me qit code mujna veq ni database me kriju, nese e bojna refresh e qet smth went wrong, per me u kriju apet dueht mendrru emrin e saj n code

?>