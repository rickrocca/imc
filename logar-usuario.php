<?php
session_start();

if(empty($_POST['nome']) || empty($_POST['senha'])) {
	exit();
}

$usuario = $_POST['nome'];
$senha = $_POST['senha'];

$query = "SELECT * from `usuario` where `usuario` = '{$usuario}' and `senha` = '{$senha}'";

$result = $query;

$row = $result;

if($row == 1) {
	$_SESSION['nome'] = $usuario;
	print "<script>location.href='?page=perfil';</script>";
    print "<script>alert('Logado com sucesso');</script>";
	
} else {
	$_SESSION['nao_autenticado'] = true;
	print "<script>location.href='?page=novo';</script>";
    print "<script>alert('Houve um erro ao tentar logar');</script>";
	
}
?>