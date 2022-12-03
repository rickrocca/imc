<?php
session_start();

if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location: login.php');
	
}

$usuario = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha2 = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * FROM `usuario` WHERE usuario = '$usuario' and senha = '{$senha2}';";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

//echo $row;

if($row == 1) {
	$_SESSION['nome'] = $usuario;
	
	/*
	header('Location: index.php?page=perfil');
	echo "<script>alert('Logado com sucesso');</script>";
	*/

	print "<script>location.href='?page=perfil';</script>";
    print "<script>alert('Logado com sucesso');</script>";
	
} else {
	$_SESSION['nao_autenticado'] = true;
	print "<script>location.href='?page=novo';</script>";
    print "<script>alert('Houve um erro ao tentar logar');</script>";
	
}
?>