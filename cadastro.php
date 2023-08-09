	<?php require_once("conexaobd.php");?>
	<?php
	//começo post
	$query_rs_post = "SELECT * from tb_posts inner join tb_usuarios on tb_posts.idUsuario = tb_usuarios.idUsuario inner join tb_imagens on tb_posts.idImagem = tb_imagens.idImagem inner join tb_categoria on tb_posts.idCategoria = tb_categoria.idCategoria where tb_posts.ativo = 1 and tb_posts.evento = 0 order by tb_posts.idPost DESC";

	$rs_post = mysqli_query($conn_bd_senac, $query_rs_post) or die(mysqli_error($conn_bd_senac));

	$row_rs_post = mysqli_fetch_assoc($rs_post);

	$totalRow_rs_post = mysqli_num_rows($rs_post);

	//fim post

	//começo consulta categoria

	$query_rs_categoria = "SELECT * FROM tb_categoria";

	$rs_categoria = mysqli_query($conn_bd_senac, $query_rs_categoria) or die(mysqli_error($conn_bd_senac));

	$row_rs_categoria = mysqli_fetch_assoc($rs_categoria);

	$totalRow_rs_categoria = mysqli_num_rows($rs_categoria);

	//fim categoria

	//começo consulta evento

	$query_rs_evento = "SELECT * from tb_posts inner join tb_usuarios on tb_posts.idUsuario = tb_usuarios.idUsuario inner join tb_imagens on tb_posts.idImagem = tb_imagens.idImagem inner join tb_categoria on tb_posts.idCategoria = tb_categoria.idCategoria where tb_posts.ativo = 1 and tb_posts.evento = 1 order by tb_posts.idPost DESC LIMIT 2;";

	$rs_evento = mysqli_query($conn_bd_senac, $query_rs_evento) or die(mysqli_error($conn_bd_senac));

	$row_rs_evento = mysqli_fetch_assoc($rs_evento);

	$totalRow_rs_evento = mysqli_num_rows($rs_evento);

	//fim consulta evento


	//começo consulta imagem

	$query_rs_imagem = "SELECT * FROM tb_imagens";

	$rs_imagem = mysqli_query($conn_bd_senac, $query_rs_imagem) or die(mysqli_error($conn_bd_senac));

	$row_rs_imagem = mysqli_fetch_assoc($rs_imagem);

	$totalRow_rs_imagem = mysqli_num_rows($rs_imagem);

	//fim consulta imagem

	//inicio adicionar post

	if(isset($_POST['titulo']) && isset($_POST['descricao']) && isset($_POST['videos']) && isset($_POST['categoria']) && isset($_POST['imagem'])) {
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$videos = $_POST['videos'];
	$categoria = $_POST['categoria'];
	$imagem = $_POST['imagem'];


	$query_rs_post = "INSERT INTO tb_posts (idPost, idUsuario, titulo, descricao, dataCad, videos, evento, vote, ativo, idCategoria, idImagem) VALUES (NULL, '3', '$titulo', '$descricao', current_timestamp(), '$videos', '0', '0', '1', '$categoria', '$imagem');";

	$rs_post = mysqli_query($conn_bd_senac, $query_rs_post) or die(mysqli_error($conn_bd_senac));

	header("Location: index.php");
	}


	//fim adicionar post

	?>

	<!DOCTYPE html>
	<html lang="pt-br">

	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Breve comentário do site -->

	<meta name="description" content="Rede Social SenacChat de aluno para aluno">

	<!-- Palavras chaves para Google -->

	<meta name="keywords" content="senac, senacchat, social, chat, educacional, redesocial, media">
	<title>SenacChat - Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
	</head>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<body class="container">
	<h1 class="fonte-zero">SenacChat - Home</h1>
	<!--início barra esquerda-->
		
			<div class="col-xl-12" align="center">
			<h2 class="fonte-zero">Menu</h2>
						<h3 class="fonte-zero">Senac Logo</h3>
						<img src="imagens/senac-logo-0.png" alt="Senac logo" width="500px" style="align-items: center" >
						<h3 class="fonte-zero">Chat rede social de aluno para aluno</h3>
						<p align="center" style="font-size: 25px" >Chat rede social de <span style="color: #FFAD5A;">aluno</span> para <span style="color: #FFAD5A;">aluno</span></p>
			</div>
		
		
	<br>
	</section>
	<div class="left-sidebar d-none d-md-block">
	<br> 

	</div>
	</section>
		
	<div class="login" style="background-color: crimson" align="center">
		<br>
		<h2> Cadastre-se </h2>

		<form action="/action_page.php">
		  <label for="fname">Digite seu Email:</label>
			<br>
		  <input name="fname" type="text" required="required" id="fname" placeholder="digite seu email">
			<br><br>

		  <label for="lname">Digite sua senha</label>
			<br>
		  <input name="lname" type="password" required="required" id="lname" placeholder="digite sua senha" >
			<br><br>

			<label for="lname">Confirme sua senha</label>
			<br>
		  <input name="lname" type="password" required="required" id="lname" placeholder="confirme sua senha" >
			<br><br>
		  <input type="submit" value="Submit">
		</form> 
			<br><br>

		<p><a href='preLogin.php'>login</a></p>
	</div>
			
			
		<pre>
                <div class="font-info">Site desenvolvido com o propósito de servir
como projeto integrador do grupo 1 da turma
TI34 do SENAC Lapa Tito. Sem quaisquer
intenção de ferir ou manchar a imagem da
instituíção.</div>
</pre>	
			
			
			
			
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>

	<?php
	//Limpando a memória de consulta
	mysqli_free_result($rs_post);
	mysqli_free_result($rs_evento);

	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>

	</body>

	</html>