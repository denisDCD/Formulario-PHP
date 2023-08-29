<?php
session_start();

//incluindo a conexão com o banco de dados
include_once("conexao.php"); 

//armazenando dados informado pelo usuário em variáveis
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
// echo "Nome: $nome<br>E-mail: $email";

//query para inserir os dados na tabela
$result_usuarios = "INSERT INTO usuarios (id, nome, email, cidade, estado) VALUES (null, '$nome', '$email', '$cidade', '$estado')";


//executando a query (fazendo o envio para o banco de dados)
$resultado_usuarios = mysqli_query($comm, $result_usuarios);

//verificando se está salvando
if(mysqli_insert_id($comm)){
    $_SESSION['msg'] = "<p style='color: green'>Usuário cadastrado com sucesso!</p>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color: red'>Usuário não foi cadastrado com sucesso!</p>";
    header("Location: index.php");
}
?>