<?php

$servidor = "localhost";   
$usuario = "root";         
$senha = "";               
$dbname = "loja_bolos";   


$conexao = new mysqli($servidor, $usuario, $senha, $dbname);


if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}


$conexao->set_charset("utf8mb4");

?>