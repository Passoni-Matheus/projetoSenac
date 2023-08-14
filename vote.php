<?php include("sessao_verifica.php");
require_once("conexaobd.php");
?>
<?php 
if(isset($_GET['idPost'])){
	$idPost = $_GET['idPost'];
}

$query_rs_vote = "UPDATE tb_posts SET vote = vote + 1 WHERE ativo = 1 and idPost = $idPost";
$rs_vote = mysqli_query($conn_bd_senac, $query_rs_vote) or die(mysqli_error($conn_bd_senac));

header("Location: index.php");
?>