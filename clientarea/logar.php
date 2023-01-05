<?php
session_start();
include('../app/php/conexao.php');

if(empty($_POST['email']) || empty($_POST['password'])) {
	header('Location: logarTeste.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "SELECT * FROM accounts WHERE Email='$email' AND Senha=md5('$senha')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
if($row == 1) {
	while ($rows = mysqli_fetch_array($result)){
		$id = $rows['id'];
	}
	$query2 = "SELECT * FROM admin WHERE id='$id'";
	$result2 = mysqli_query($conexao, $query2);
$row2 = mysqli_num_rows($result2);
$result2 = mysqli_query($conexao, $query2);
if($row2 == 1) {
		$_SESSION['admin'] = $id;
}

	$_SESSION['usuario'] = $email;
	header('Location: ../panel/index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: logarTeste.php');
	exit();
}