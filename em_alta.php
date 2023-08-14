<?php
include("sessao_verifica.php");
require_once("conexaobd.php");?>
<?php
$sessao_logado = $_SESSION['idUsuario'];
//começo post
$query_rs_post = "SELECT * from tb_posts inner join tb_usuarios on tb_posts.idUsuario = tb_usuarios.idUsuario inner join tb_imagens on tb_posts.idImagem = tb_imagens.idImagem inner join tb_categoria on tb_posts.idCategoria = tb_categoria.idCategoria where tb_posts.ativo = 1 and tb_posts.evento = 0 order by tb_posts.vote DESC";

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

//começo consulta logado

$query_rs_logado = "SELECT * FROM tb_usuarios inner join tb_generos on tb_usuarios.idGenero = tb_generos.idGenero where tb_usuarios.suspenso = 0 and tb_usuarios.idUsuario = $sessao_logado";

$rs_logado = mysqli_query($conn_bd_senac, $query_rs_logado) or die(mysqli_error($conn_bd_senac));

$row_rs_logado = mysqli_fetch_assoc($rs_logado);

//fim consulta logado

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
    <title>SenacChat - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="short icon" href="senac-logo.ico">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
</head>

<body class="container">
	<h1 class="fonte-zero">SenacChat - Home</h1>
    <!--início barra esquerda-->
    <div class="row">
		<div class="col-sm-5 col-5 d-block d-md-none div-center" ></div>
		<div class="col-sm-4 col-4 d-block d-md-none div-center"><img class="leftside-image" src="imagens/senac-logo-0.png" alt="Senac.logo" width="70px"></div>
		<div class="col-sm-3 col-3 d-block d-md-none div-center"></div>
		<div class="col-sm-12 col-12 d-block d-md-none div-center"><p class="font-subtitulo">Chat rede social de <span style="color: #FFAD5A;">aluno</span> para <span style="color: #FFAD5A;">aluno</span></p></div>
		<div class="col-sm-12 col-12 d-block d-md-none"><br></div>
		
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-2 col-2">
            <?php include("_barra-esquerda.php"); ?>
        </div>
		
        <!--Inicio conteúdo-->
        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-10 col-10">
            <div class="container main-content flex">
                <div class="card">
                    <div class=" card-header top-bar header-top">
                        <div class="row barra">
							<div class="col-xl-1"></div>
							<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-5 ctr"><a href="index.php" style="color: #4872ab; text-decoration: none" class="mudar !important">Para você</a></div>
							<div class="col-xl-2 col-lg-4 col-md-2 col-sm-2 col-2 ctr">|</div>
							<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-5 ctr"><a href="em_alta.php" style="color: #ffad5a; text-decoration: none" class="mudar !important">Em Alta</a></div>
							<div class="col-xl-1"></div>
						</div>
						</div>
                    
					<div>
                    <?php include("_conteudo.php");?>
					</div>
					</div>
			</div>
        </div>
		
        <!--Inicio barra direita-->
        <div class="col-xl-3 margem-top">

            <?php include("_barra-direita.php");?>
            
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
	mysqli_free_result($rs_logado);
	mysqli_free_result($rs_categoria);
	mysqli_free_result($rs_imagem);
	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>
</body>

</html>