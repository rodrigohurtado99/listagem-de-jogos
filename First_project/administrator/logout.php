<?php

    if(!isset($_SESSION)){
        session_start();
    }

    session_destroy();

    header("location: ../main_code/start.php");
?>