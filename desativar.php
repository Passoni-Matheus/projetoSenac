<?php require_once("conexaobd.php"); ?>
<?php

if(isset($_GET['idUsuario'])){
	$idUsuario = $_GET['idUsuario'];
}

$query_rs_posts = "SELECT * FROM tb_posts inner join tb_usuarios on tb_usuarios.idUsuario = tb_posts.idUsuario where tb_usuarios.idUsuario = $idUsuario";

$rs_posts = mysqli_query($conn_bd_senac, $query_rs_posts) or die(mysqli_error($conn_bd_senac));

$row_rs_posts = mysqli_fetch_assoc($rs_posts);

$total_rs_posts = mysqli_num_rows($rs_posts);

if($row_rs_posts['ativo'] == 0){
	$query_rs_suspender = "UPDATE tb_posts SET ativo = 1 where idUsuario = $idUsuario"; 
	$rs_suspender = mysqli_query($conn_bd_senac, $query_rs_suspender) or die(mysqli_error($conn_bd_senac));
} else {
	$query_rs_suspender = "UPDATE tb_posts SET ativo = 0 where idUsuario = $idUsuario"; 
	$rs_suspender = mysqli_query($conn_bd_senac, $query_rs_suspender) or die(mysqli_error($conn_bd_senac));
}

header("Location: adm-procurar.php");

?>