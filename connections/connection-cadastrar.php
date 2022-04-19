<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$tipouser = mysqli_real_escape_string($conexao, trim($_POST['tipouser']));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location:  src/pages/interfaces/cad-user.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro, tipouser) VALUES ('$nome', '$usuario', '$senha', NOW(), '$tipouser');";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../src/pages/interfaces/cad-user.php');
exit;
?>