<?php

    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['id'])){
        die("Você não tem permissão para acessar essa página, <a href='../administrator/acesso.php'>clique aqui para voltar</a>");
    }

?>