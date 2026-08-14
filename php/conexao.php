<?php
    $host = 'localhost';
    $database = 'login';
    $usuario = 'root';
    $senha = '';

    $conn = new mysqli($host,$usuario,$senha,$database);

    if($conn->connect_error){
        die('Erro ao conectar ao banco de dados'. $conn->connect_error);
    }
?>