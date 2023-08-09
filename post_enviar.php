<?php require_once("conexaobd.php");?>
<?php 

$sessao_logado = $_SESSION['idUsuario'];


//começo consulta logado

$query_rs_logado = "SELECT * FROM tb_usuarios inner join tb_generos on tb_usuarios.idGenero = tb_generos.idGenero where tb_usuarios.suspenso = 0 and tb_usuarios.idUsuario = $sessao_logado";

$rs_logado = mysqli_query($conn_bd_senac, $query_rs_logado) or die(mysqli_error($conn_bd_senac));

$row_rs_logado = mysqli_fetch_assoc($rs_logado);

//fim consulta logado


//inicio adicionar post

if(isset($_POST['titulo']) && isset($_POST['descricao']) && isset($_POST['videos']) && isset($_POST['categoria']) && isset($_POST['imagem'])) {
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$videos = $_POST['videos'];
	$categoria = $_POST['categoria'];
	$imagem = $_POST['imagem'];
	


$query_rs_post = "INSERT INTO tb_posts (idPost, idUsuario, titulo, descricao, dataCad, videos, evento, vote, ativo, idCategoria, idImagem) VALUES (NULL, '7', '$titulo', '$descricao', current_timestamp(), '$videos', '0', '0', '1', '$categoria', '$imagem');";

$rs_post = mysqli_query($conn_bd_senac, $query_rs_post) or die(mysqli_error($conn_bd_senac));
	
	header("Location: index.php");
}


//fim adicionar post


header("Location: index.php");







?>