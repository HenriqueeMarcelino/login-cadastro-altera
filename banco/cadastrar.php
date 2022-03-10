<?php
session_start();

use loja;
require_once "./loja.php";

$email = strtolower($_POST["login"]);
$senha = $_POST["senha"];
$nome = $_POST["nome"];

$loja = new loja();
$validar = $loja->cadastrarUsuário($nome,$email,$senha);

$_SESSION['loginErro'] = "Seu cadastro foi concluido! Inicie sessão";
header("Location: ../index.php");