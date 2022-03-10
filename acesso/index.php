<?php
session_start();

$email = $_SESSION['usuarioEmail'];
$senha =  $_SESSION['usuarioSenha'];
$nome = $_SESSION['usuarioNome'];
$id = $_SESSION['usuarioId'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Sistema Do Henrique</title>
</head>
<body>
<link href="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <h4>Alterar Cadastro</h4>
        </div>
        <form method="post" action="../banco/alterarCadastro.php">
            <label>Nome de usuário</label><br>
            <input type="text" id="nome" value="<?= $nome?>" class="fadeIn second" name="nome" placeholder="<?= $nome?>">
            <label>Endereço Email</label><br>
            <input type="text" id="login" value="<?= $email?>" class="fadeIn second" name="login" placeholder="<?= $email?>">
            <label>Sua senha</label><br>
            <input type="text" id="password" value="<?= $senha?>" class="fadeIn third" name="senha" placeholder="<?= $senha?>">
            <input type="hidden" id="id" class="fadeIn third" name="id" value="<?= $id?>">
            <input type="submit" value="Alterar">
        </form>
    </div>
    <form action="../banco/logout.php">
        <input type="submit"  class="" value="Encerrar Sessão">
    </form>
</div>
</body>
</html>