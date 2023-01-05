<?php
session_start();
include("../app/php/conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['Nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['Email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['Senha'])));
$repeatsenha = mysqli_real_escape_string($conexao, trim(md5($_POST['rSenha'])));

if($senha != $repeatsenha){
    $_SESSION['senhasncoecidem'] = true;
    header('location: register.php');
    exit();
}

$sql = "SELECT count(*) AS total FROM accounts WHERE Email='$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: register.php');
	exit;
}

if(!isset($_POST['check'])){
	header('location: register.php');
    exit();
}

$sql = "INSERT INTO accounts(Email, Senha, User, Scripts,Licenses,Valor) VALUES ('$email', '$senha', '$nome','0','0','00,00')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: register.php');
exit;
?>