<?php
$hostName = "localhost"; //link do servidor
$usuario = "root"; //nome de usuário
$senha = ""; //senha de usuário
$bancoDeDados = "forms"; //nome do banco de dados

$comm = new mysqli($hostName, $usuario, $senha, $bancoDeDados); //criando a conexão
?>