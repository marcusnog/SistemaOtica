<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: inicial.php');
	exit();
}
?>