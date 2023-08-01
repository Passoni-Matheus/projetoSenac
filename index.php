<?php require_once("conexaobd.php");?>
<?php
//começo post
$query_rs_post = "SELECT * from tb_posts inner join tb_usuarios on tb_posts.idUsuario = tb_usuarios.idUsuario inner join tb_imagens on tb_posts.idImagem = tb_imagens.idImagem inner join tb_categoria on tb_posts.idCategoria = tb_categoria.idCategoria where tb_posts.ativo = 1 and tb_posts.evento = 0";

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SenacChat - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
</head>

<body class="container">
    <!--início barra esquerda-->
    <div class="row">
        <div class="col-xl-3">
            <?php include("_barra-esquerda.php"); ?>
        </div>
        <!--Inicio conteúdo-->
        <div class="col-xl-6">
            <div class="container main-content flex">
                <div class="card">
                    <div class=" card-header header-top">
                        <div>Home</div>
                        <div>
                        <nav class="navbar navbar-light bg-light flexbar">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" style="width: 427px;" type="search" placeholder="Pesquisar"
                                     aria-label="Pesquisar">
                            </form>
                        </nav>
                            </div>
                        <div class="row font-center">
                            <div class="col-xl-5">Para você</div>
                            <div class="col-xl-2">|</div>
                            <div class="col-xl-5">Em alta</div>
						</div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php include("_conteudo.php");?>
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
	
	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>
	
</body>

</html>