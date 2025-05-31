<?php
    session_start();

    include_ones('config.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $username = $_POST['password'];
        if (empty($username) || empty($password)){
            echo "Please fill in all fields";
        }
    }
?>