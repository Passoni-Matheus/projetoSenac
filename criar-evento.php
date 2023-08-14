<?php include("sessaoadm_verifica.php");
require_once("conexaobd.php"); ?>
<?php

$query_rs_categoria = "SELECT * FROM tb_categoria";

$rs_categoria = mysqli_query($conn_bd_senac, $query_rs_categoria) or die(mysqli_error($conn_bd_senac));

$row_rs_categoria = mysqli_fetch_assoc($rs_categoria);





$query_rs_imagem = "SELECT * FROM tb_imagens";

$rs_imagem = mysqli_query($conn_bd_senac, $query_rs_imagem) or die(mysqli_error($conn_bd_senac));

$row_rs_imagem = mysqli_fetch_assoc($rs_imagem);

$totalRow_rs_imagem = mysqli_num_rows($rs_imagem);


if(isset($_POST['titulo']) && isset($_POST['descricao']) && isset($_POST['videos']) && isset($_POST['categoria']) && isset($_POST['imagem'])) {
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$videos = $_POST['videos'];
	$categoria = $_POST['categoria'];
	$imagem = $_POST['imagem'];
	


$query_rs_post = "INSERT INTO tb_posts (idPost, idUsuario, titulo, descricao, dataCad, videos, evento, vote, ativo, idCategoria, idImagem) VALUES (NULL, '1', '$titulo', '$descricao', current_timestamp(), '$videos', '1', '0', '1', '$categoria', '$imagem');";

$rs_post = mysqli_query($conn_bd_senac, $query_rs_post) or die(mysqli_error($conn_bd_senac));
	
}


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Adicionar post de evento</title>
</head>
<body>
	
	<h1>Adicionar post de evento</h1>
	<a href="adm-procurar.php"><p>Voltar</p></a>
	
	<form method="post" enctype="multipart/form-data">
	
	<div>Titulo do Post: </div>
		<input name="titulo" type="text" id="titulo">
	<br>
<br>

	<div>Descrição do Post: </div>
		<textarea name="descricao" type="text" id="descricao"></textarea>
		<br>
<br>

	<div>Video do Post: </div>
	  <input name="videos" type="text" id="videos">
		<p style="font-size: 12px">PS: Use somente URL do Youtube</p>
			<br>

	<div>Categoria do Post: </div>
		<select name="categoria" id="categoria">
			<?php do {?>
			<option value="<?php echo($row_rs_categoria['idCategoria'])?>"><?php echo($row_rs_categoria['categoria'])?></option>
			<?php } while($row_rs_categoria = mysqli_fetch_assoc($rs_categoria));?>
		</select>
		<br>
		
					<br>
<br>

	<div>Imagem do Post: </div>
		<select name="imagem" id="imagem">
			<?php do {?>
			<option value="<?php echo($row_rs_imagem['idImagem'])?>"><?php echo($row_rs_imagem['fotoThumb'])?></option>
			<?php } while($row_rs_imagem = mysqli_fetch_assoc($rs_imagem));?>
		</select>
		<br>
<br>
<br>

		
		<input type="submit">
	
	</form>
	<?php
	//Limpando a memória de consulta
	mysqli_free_result($rs_categoria);
 	mysqli_free_result($rs_imagem);
	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>
</body>
</html>









