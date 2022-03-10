<?php
session_start();

use loja;
require_once "./loja.php";

echo $_SESSION['usuarioId'];
echo $_SESSION['usuarioEmail'];
echo $_SESSION['usuarioSenha'];
echo $_SESSION['usuarioNome'];

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["login"];
$senha = $_POST["senha"];

if ($email == "")
{
    $email = $_SESSION['usuarioEmail'];
}
if ($senha == "")
{
    $senha = $_SESSION['usuarioSenha'];
}
if ($nome == "")
{
    $nome = $_SESSION['usuarioNome'];
}

$loja = new loja();
$validar = $loja->editarUsuário($nome, $email, $senha, $id);

