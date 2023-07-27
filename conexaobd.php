<?php 
//métodos de conexão com o BD mysqli, mysql e pdo

$hostname_conn_bd_ctec = "localhost";
$database_conn_bd_ctec = "senacchat";
$username_conn_bd_ctec = "root";
$password_conn_bd_ctec = "";

//criando a conexão usando as variáveis

$conn_bd_ctec = mysqli_connect($hostname_conn_bd_ctec,$username_conn_bd_ctec,$password_conn_bd_ctec,$database_conn_bd_ctec) or trigger_error(mysqli_errno(), e_user_error);


//echo "Conectado com sucesso";


//variável global do site

//$GLOBALS['dirUp'] = "imagens/upload/";


?>