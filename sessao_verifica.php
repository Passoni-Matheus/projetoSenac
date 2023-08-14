<?php
session_start();


//Se a sessão do usuário não existir

if(!$_SESSION['email'] && !$_SESSION['idUsuario']){
	header('Location: preLogin.php');
	exit();
}







?>