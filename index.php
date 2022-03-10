<?php
session_start();

$erro = $_SESSION["loginErro"];
session_destroy();
@$logout = $_GET['logout'];
if($logout == true){
    $erro = "Você foi desconectado com sucesso!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Sistema Do Henrique</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <h4>Login</h4>
        </div>
        <form method="post" action="banco/valida.php">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Email...">
            <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha">
            <h6 class="fadeIn fourth"><?= $erro; ?></h6>
            <input type="submit" class="fadeIn fourth" value="Entrar">
        </form>
        <div id="formFooter">
            <a class="underlineHover" href="cadastrar.php">Ainda não tem uma conta?</a>
        </div>
    </div>
</div>
</body>
</html>