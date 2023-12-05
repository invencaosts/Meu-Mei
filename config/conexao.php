<?php

$user = 'root';
$password = '';
$db = 'dbmeumei';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $password, $db);

if($mysqli->connect_error) {
    die('Falha ao conectar ao banco de dados'.$mysqli->connect_error);
}

?>