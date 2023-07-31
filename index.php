<?php require_once("conexaobd.php");?>
<?php
$query_rs_post = "SELECT * from tb_posts inner join tb_usuarios on tb_posts.idUsuario = tb_usuarios.idUsuario inner join tb_imagens on tb_posts.idImagem = tb_imagens.idImagem inner join tb_categoria on tb_posts.idCategoria = tb_categoria.idCategoria where tb_posts.ativo = 1 and tb_posts.evento = 0";

$rs_post = mysqli_query($conn_bd_senac, $query_rs_post) or die(mysqli_error($conn_bd_senac));

$row_rs_post = mysqli_fetch_assoc($rs_post);

$totalRow_rs_post = mysqli_num_rows($rs_post);





$query_rs_evento = "SELECT * from tb_posts inner join tb_usuarios on tb_posts.idUsuario = tb_usuarios.idUsuario inner join tb_imagens on tb_posts.idImagem = tb_imagens.idImagem inner join tb_categoria on tb_posts.idCategoria = tb_categoria.idCategoria where tb_posts.ativo = 1 and tb_posts.evento = 1";

$rs_evento = mysqli_query($conn_bd_senac, $query_rs_evento) or die(mysqli_error($conn_bd_senac));

$row_rs_evento = mysqli_fetch_assoc($rs_evento);

$totalRow_rs_evento = mysqli_num_rows($rs_evento);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--script para uso do bootstrap-->
    <link href="bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--script para uso do fontawesome-->
    <script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
    <script src="font-awesome/js/all.js"></script>

    <!-- Start wowslider HEAD section -->
    <link rel="stylesheet" type="text/css" href="galeria/engine1/style.css">
    <script src="galeria/engine1/jquery.js"></script>
    <!-- End wowslider HEAD section -->

    <!-- Título EXCLUSIVO, não pode ser repetido em outras páginas Máx. 60 caracteres -->
    <title>Senac</title>

    <!-- Breve descrição do site para o Google Máx. 147 carcteres -->
    <meta name="description" content="Desenvolvimento de cursos de tecnologia">

    <!-- Palavras chaves para o Google Máx. indefinido -->
    <meta name="keywords"
        content="cursos, tecnologia, ti, informática, html5, css3, senac, desenvolvimento, web, websites, php, sql, mysql">

    <!-- Ícone -->
    <link rel="short icon" href="download.ico">

    <!-- Metatag responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="lightbox2/dist/css/lightbox.min.css" rel="stylesheet" type="text/css">

    <!--link da fonte utilizada no site-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

</head>

<body class="container-fluid">
	
	
    <!-------------left_sidebar----------->
    <?php include("_barra-esquerda.php")?>
        <!-------------main_content----------->
	<div class="main-content">
            <div class="card">
				<div class=" card-header header-top">
                    <div>Home</div>
                    <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar"
                                style="width: 567px;" aria-label="Pesquisar">
                        </form>
                    </nav>
                    <div class="row font-center">
                        <div class="col-xl-5">Para você</div>
                        <div class="col-xl-2">|</div>
                        <div class="col-xl-5">Em alta</div>
                    </div>
                </div>
        <?php include("_conteudo.php")?>
			</div>
		</div>
        <!-------------right_sidebar----------->
        <?php include("_barra-direita.php")?>
</body>

</html>