<?php
session_start();


//Se a sessão do usuário não existir

if(!$_SESSION['user']){
	header('Location: adm-login.php');
	exit();
}







?>