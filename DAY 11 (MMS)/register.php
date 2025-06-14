<?php
    include_once('config.php');

    if(isset($_POST['submit'])){
        $emri = $_POST['emri'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        $tempPass = $_POST['password'];
        $password = password_hash($tempPass, PASSWORD_DEFAULT);

        $tempConfirm = $_POST['confirm_password'];
        $confirm_password = password_hash($tempConfirm, PASSWORD_DEFAULT);

        if(empty($emri) || empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
            echo "You have not filled in all the fields.";
        }
        else{
            $sql = "INSERT INTO users (emri, username, email, password, confirm_password) values (:emri, :username, :email, :password, :confirm_password)";

            $insertsql = $conn->bindeParam(':emri', $emri);
            $insertsql = $conn->bindeParam(':username', $username);
            $insertsql = $conn->bindeParam(':email', $email);
            $insertsql = $conn->bindeParam(':password', $password);
            $insertsql = $conn->bindeParam(':confirm_password', $confirm_password);

            $insertsql->execute();

            header("Location: login.php");
        }
    }
?>