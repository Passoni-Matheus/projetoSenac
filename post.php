<?php require_once("conexaobd.php");?>
<?php

//inicio selecionar post especifico
if(isset($_GET['idPost'])){
	$idPost = $_GET['idPost'];
}
//fim selecionar post especifico

$query_rs_publi = "SELECT * from tb_posts inner join tb_usuarios on tb_posts.idUsuario = tb_usuarios.idUsuario inner join tb_imagens on tb_posts.idImagem = tb_imagens.idImagem inner join tb_categoria on tb_posts.idCategoria = tb_categoria.idCategoria where tb_posts.ativo = 1 and tb_posts.idPost = $idPost";

$rs_publi = mysqli_query($conn_bd_senac, $query_rs_publi) or die(mysqli_error($conn_bd_senac)); 

$row_rs_publi = mysqli_fetch_assoc($rs_publi);
//inicio adicionar post


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

//começo consulta imagem

$query_rs_imagem = "SELECT * FROM tb_imagens";

$rs_imagem = mysqli_query($conn_bd_senac, $query_rs_imagem) or die(mysqli_error($conn_bd_senac));

$row_rs_imagem = mysqli_fetch_assoc($rs_imagem);

$totalRow_rs_imagem = mysqli_num_rows($rs_imagem);

//fim consulta imagem

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SenacChat - Publicação de <?php echo($row_rs_publi['nome'])?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
</head>

<body class="container">
	
	<h1 class="fonte-zero">SenacChat - Publicação de <?php echo($row_rs_publi['nome'])?></h1>
	
    <!--início barra esquerda-->
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <?php include("_barra-esquerda.php"); ?>
        </div>
        <!--Inicio conteúdo-->
        <div class="col-xl-9 col-lg-7 col-md-7">
            <div class="container main-content flex">
                <div class="card" style="width:955px;">
					<div>
                     <div class="card-body">
					   <section>
								<h2 class="fonte-zero">Publicação</h2>
                        <div class="row">
							
									<section>
										<h3 class="fonte-zero">Foto do usuário</h3>
                            <div class="col-xl-1 col-lg-1 col-md-1 imagem-usuario"><img class="rounded-circle" src="<?php echo($icones.$row_rs_publi['fotoPerfil']) ?>" alt="" width="55px"></div>
									</section>
                        <div class="col-xl-8 col-lg-8 col-md-7 <?php if($row_rs_publi['fotoPerfil'] == "aluno.png" || $row_rs_publi['fotoPerfil'] == "aluna.png") {
						echo("nome-usuario-2"); 
							}
						  else { 
							  echo("nome-usuario"); 
						  			} ?>" style="font-size: 22px; padding-top: -35px;"><?php echo($row_rs_publi['nome'])?></div>
									
                            <div class="col-xl-3 col-lg-3 col-md-3 data" style="font-size: 15.5px; font-weight: bold;"><?php echo($row_rs_publi['dataCad'])?></div>			<section>
										<h3 class="fonte-zero">Categoria</h3>
							<div class="col-xl-12 col-lg-12 col-md-12 borda-cat"><?php echo($row_rs_publi['idCategoria'])?></div>
                            		</section>
							<a class="link-post" id="link_post" title="">
								<br>
								<section>
								<h3 class="card-text col-xl-12 col-lg-12 col-md-12" style="font-size: 22px; font-weight: bold; color: #1B2E4A;"><?php echo($row_rs_publi['titulo'])?></h3>
								</section>
								<section>
									<h3 class="fonte-zero">Descrição</h3>
								<p class="card-text col-xl-12 col-lg-12 col-md-12" style="font-size: 16.5px;"><?php echo($row_rs_publi['descricao'])?></p>
								</section>
								<section>
									<h3 class="fonte-zero">Imagem - <?php echo($row_rs_publi['fotoThumb'])?></h3>
                                 <div class="col-xl-12"><img class="imagens card img-fluid" src="imagens/imagens-p/<?php echo($row_rs_publi['fotoThumb'])?>" alt="<?php echo($row_rs_publi['fotoThumb'])?>" width="1400"></div>
								</section>
                                <div class="col-xl-12 col-lg-12 hidden">●</div>
								
									
                                <div class="col-xl-6 col-lg-6 col-md-6 font-center"><a href="#"><img src="imagens/vote.png" width="28" height="28" title="Vote"></a></div>
									
                                <div class="col-xl-6 col-lg-6 col-md-6 font-center"><a href="#"><img src="imagens/senac-logo-0 shareicon.png" title="Compartilhar" alt="Compartilhar" width="33" height="28"></a></div>
							
							</a>
				
                    <br>
                </div>
			</section>
            </div>
        </div>
	</div>
        <!--Inicio barra direita-->
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
	
	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>
	
</body>
</html>