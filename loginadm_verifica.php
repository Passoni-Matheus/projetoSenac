<?php
session_start();

require_once("conexaobd.php");

//Verificação email e senha for vazio

if(empty($_POST['user']) || empty($_POST['senha'])) {
header("Location: adm-login.php");
exit();
	
};


$usuario = mysqli_real_escape_string($conn_bd_senac, $_POST['user']);
//$senha = preg_replace('/[^[:alpha:]_]/', '',$_POST['senha']);
$senha = mysqli_real_escape_string($conn_bd_senac, $_POST['senha']);

// consulta sql

$query_rs_login = "SELECT * FROM tb_loginadm WHERE nome = '{$usuario}' and senha = '{$senha}'"; 
$rs_login = mysqli_query($conn_bd_senac, $query_rs_login) or die(mysqli_error($conn_bd_senac));
$row_rs_login = mysqli_fetch_assoc($rs_login);

$linhas = mysqli_num_rows($rs_login);

//echo($linhas);


//Condicional para iniciar uma sessão
	if($linhas == 1 ){
		$_SESSION['user'] = $usuario; // senha pode ter igual, email não
		header('Location: adm-procurar.php');
		exit();
	} else {
		header('Location: adm-login.php');
		exit();
}

?>