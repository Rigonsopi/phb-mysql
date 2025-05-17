<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $tempPass = $_POST['password'];

    if (empty($name) || empty($surname) || empty($username) || empty($email)) {
        header("Location: update.php?error=empty_fields");
        exit();
    }

    if (!empty($tempPass)) {
        $password = password_hash($tempPass, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET name=:name, surname=:surname, username=:username, email=:email, password=:password WHERE id=:id";
    } else {
        $sql = "UPDATE users SET name=:name, surname=:surname, username=:username, email=:email WHERE id=:id";
    }

    $prep = $connect->prepare($sql);
    $prep->bindParam(':id', $id);
    $prep->bindParam(':name', $name);
    $prep->bindParam(':surname', $surname);
    $prep->bindParam(':username', $username);
    $prep->bindParam(':email', $email);
    if (!empty($tempPass)) {
        $prep->bindParam(':password', $password);
    }

    $prep->execute();
    header('Location: dashboard.php');
    exit();
}
?>
