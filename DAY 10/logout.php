<?php

    include_once("config.php");
    session_destroy();
    header("Location:signin.php");

?>