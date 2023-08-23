<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário php</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="processar.php">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Informe seu nome completo">
        <br>
        <label>E-mail:</label>
        <input type="email" name="email" placeholder="Informe seu melhor email">
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>