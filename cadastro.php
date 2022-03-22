<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "INSERT INTO usuario (usuario, email, senha) VALUES ('{$usuario}', '{$email}', md5('{$senha}'))";

if ($conexao->query($query) === TRUE) {
    $_SESSION['autenticado'] = true;
	header('Location: cadastrar.php');
	exit();
} else {
  echo "Error: " . $query . "<br>" . $conexao->error;
}

$conexao->close();
?>