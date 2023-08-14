<?php
session_start();

require_once("conexaobd.php");

//Verificação email e senha for vazio

if(empty($_POST['email']) || empty($_POST['senha'])) {
header("Location: adm_login.php");
exit();
	
};


$usuario = mysqli_real_escape_string($conn_bd_senac, $_POST['email']);
//$senha = preg_replace('/[^[:alpha:]_]/', '',$_POST['senha']);
$senha = mysqli_real_escape_string($conn_bd_senac, $_POST['senha']);

$senha = md5($senha);

// consulta sql

$query_rs_login = "SELECT * FROM `tb_usuarios` WHERE email = '{$usuario}' and senha = '{$senha}'"; 
$rs_login = mysqli_query($conn_bd_senac, $query_rs_login) or die(mysqli_error($conn_bd_senac));
$row_rs_login = mysqli_fetch_assoc($rs_login);

$linhas = mysqli_num_rows($rs_login);

//echo($linhas);


//Condicional para iniciar uma sessão
	if($linhas == 1 && $row_rs_login['suspenso'] == 0){
		$_SESSION['email'] = $usuario; // senha pode ter igual, email não
		$_SESSION['idUsuario'] = $row_rs_login['idUsuario'];
		header('Location: index.php');
		exit();
	} else {
		echo('<script> alert("Login incorreto ou usuário suspenso"); 
		window.location.href="preLogin.php";
		</script>');
		exit();
		
}

?>








