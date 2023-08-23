<?php
$hostName = "localhost"; //link do servidor
$usuario = "root"; //nome de usuário
$senha = ""; //senha de usuário
$bancoDeDados = "php_conexao"; //nome do banco de dados

$mysqli = new mysqli($hostName, $usuario, $senha, $bancoDeDados); //criando a conexão
?>