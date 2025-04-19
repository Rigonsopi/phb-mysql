<?php

include_once("config.php");

//$id = 1;caktohet cila id me u fshi
$id = $_GET['id'];//cilen e klikojna fshihet

$sql = "DELETE FROM users WHERE id=:id";

$deleteUsers = $connect->prepare($sql);
$deleteUsers->bindParam(':id', $id);
$deleteUsers->execute();

header('Location:index.php');

?>