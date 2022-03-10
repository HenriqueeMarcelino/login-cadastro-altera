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
            <h4>Cadastrar</h4>
        </div>
        <form method="post" action="banco/cadastrar.php">
            <input type="text" id="nome" class="fadeIn second" name="nome" placeholder="Seu Nome">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Seu email...">
            <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Sua senha">
            <input type="submit" class="fadeIn fourth" value="Cadastrar">
        </form>
        <div id="formFooter">
            <a class="underlineHover" href="index.php">Ja possui uma conta?</a>
        </div>
    </div>
</div>
</body>
</html>