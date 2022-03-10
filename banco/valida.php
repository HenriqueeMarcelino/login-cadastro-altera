<?php
session_start();

use loja;
require_once "./loja.php";

$email = strtolower($_POST["login"]);
$senha = $_POST["senha"];

$loja = new loja();
$validar = $loja->validaLogin($email, $senha);

if ($validar == 1)
{

    $id = $loja->exibirId($email);
    $loja->completaLogin($id);

}
else
{
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: ../index.php");
}

