<?php
session_start();
include("conexao.php");

$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));


$sql = "select count(*) as total from marca where descricao = '$descricao'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['descricao_existe'] = true;
	header('Location: ../src/pages/interfaces/cad-marca.php');
	exit;
}

$sql = "INSERT INTO marca (descricao) VALUES ('$descricao');";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../src/pages/interfaces/cad-marca.php');
exit;
?>