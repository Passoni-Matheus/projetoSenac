<?php 
//métodos de conexão com o BD mysqli, mysql e pdo

//$hostname_conn_bd_senac = "localhost";
//$database_conn_bd_senac = "senacchat";
//$username_conn_bd_senac = "root";
//$password_conn_bd_senac = "";


$hostname_conn_bd_senac = "robb0463.publiccloud.com.br:3306";
$database_conn_bd_senac = "ctsdigital2011_senacchat";
$username_conn_bd_senac = "ctsdi_chatadm";
$password_conn_bd_senac = "@66QDMYJ49h";

//criando a conexão usando as variáveis

$conn_bd_senac = mysqli_connect($hostname_conn_bd_senac,$username_conn_bd_senac,$password_conn_bd_senac,$database_conn_bd_senac) or trigger_error(mysqli_errno(), e_user_error);


mysqli_set_charset($conn_bd_senac, "utf8");
//echo "Conectado com sucesso";


//variável global do site

$GLOBALS['icones'] = "imagens/icones/";


?>