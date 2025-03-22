<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=rigonii", "root", "");

   // $username = "Rigon";
   // $password = password_hash("itsmypass", PASSWORD_DEFAULT);

   // $sql = "INSERT INTO rigonii(username,password) VALUES ('$username', '$password')";

   // $sql = "ALTER table rigonii ADD email VARCHAR(255)"; //komand me te cilen mujna me shtu diqka prsh kolon ne nje tabel ekzistuese
  
   // $sql = "ALTER table rigonii DROP COLUMN email"; //komand per me hjek ni kolon prej ni tabele ekzistuese
    
   // $sql = "DROP TABLE PRODUCTS"; //komand e cila e fshin komplet ni tabel, e njejta munet me u bo edhe me database
    
    $pdo->exec($sql);

    echo "New record created successfully";
}catch(DOExecption $e){
    echo $e->getMessage();
}



?>