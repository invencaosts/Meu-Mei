<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION["id"])) {
    die('Você não pode acessar esta página, faça o login para acessar');
}

?>