<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=database", "root", "");

    $username = "Rigoni";
    $password = password_hash("mypassword", PASSWORD_DEFAULT);

    $sql = "INSERT INTO user(username,password) VALUES ("$username", "$password")";

    $pdo->exec($sql);

    echo "New record created successfully";
}catch(DOExecption $e){
    echo $e->getMessage();
}

?>