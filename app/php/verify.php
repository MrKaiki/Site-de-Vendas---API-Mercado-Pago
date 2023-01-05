<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: https://mrkaikiscripting.com.br/login.php');
	exit();
}
?>