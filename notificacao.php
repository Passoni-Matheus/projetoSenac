<?php
include("sessao_verifica.php");
require_once("conexaobd.php");?>
<?php

$sessao_logado = $_SESSION['idUsuario'];

$query_rs_post = "SELECT * from tb_posts inner join tb_usuarios on tb_posts.idUsuario = tb_usuarios.idUsuario inner join tb_imagens on tb_posts.idImagem = tb_imagens.idImagem inner join tb_categoria on tb_posts.idCategoria = tb_categoria.idCategoria where tb_posts.ativo = 1 and tb_posts.evento = 1";

 

$rs_post = mysqli_query($conn_bd_senac, $query_rs_post) or die(mysqli_error($conn_bd_senac));

 

$row_rs_post = mysqli_fetch_assoc($rs_post);

 

$totalRow_rs_post = mysqli_num_rows($rs_post);

 

 

 

$query_rs_evento = "SELECT * from tb_posts inner join tb_usuarios on tb_posts.idUsuario = tb_usuarios.idUsuario inner join tb_imagens on tb_posts.idImagem = tb_imagens.idImagem inner join tb_categoria on tb_posts.idCategoria = tb_categoria.idCategoria where tb_posts.ativo = 1 and tb_posts.evento = 1 order by tb_posts.idPost DESC LIMIT 2;";

 

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
<title>Notificação</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="short icon" href="senac-logo.ico">
 

    <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
</head>

 

<body class="container">
<!--início barra esquerda-->

<div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-2 col-2">
            <div class="col-sm-5 col-5 d-block d-md-none div-center"></div>
            <div class="col-sm-4 col-4 d-block d-md-none div-center"><img class="leftside-image"
                    src="imagens/senac-logo-0.png" alt="Senac.logo" width="70px"></div>
            <div class="col-sm-3 col-3 d-block d-md-none div-center"></div>
            <div class="col-sm-12 col-12 d-block d-md-none div-center">
                <p class="font-subtitulo">Chat rede social de <span style="color: #FFAD5A;">aluno</span> para <span
                        style="color: #FFAD5A;">aluno</span></p>
            </div>
            <div class="col-sm-12 col-12 d-block d-md-none"><br></div>
            <div class="left-sidebar">
                <a href="index.php"><img class="leftside-image d-none d-md-block" src="imagens/senac-logo-0.png"
                        alt="Senac.logo" width="170px"></a>
                <p class="font-sub d-none d-md-block">Chat rede social de <span style="color: #FFAD5A;">aluno</span>
                    para <span style="color: #FFAD5A;">aluno</span></p>
                <ul class="list-nav">
                    <li><a href="notificacao.php" class="d-block d-md-none"><i class="fa-solid fa-bell"
                                style="color: #4872ab;"></i></a>
                        <a href="notificacao.php" class="left-sidebar hover d-none d-md-block">Notificações</a>
                    </li>
                    <br>
                    <li><a href="busca-chat.php" class="d-block d-md-none"><i class="fa-solid fa-comment-dots"
                                style="color: #4872ab;"></i></a>
                        <a href="busca-chat.php" class="left-sidebar hover d-none d-md-block">Mensagens</a>
                    </li>
                    <br>
                    <li><a href="configuracoes.php" class="d-block d-md-none"><i class="fa-solid fa-gear"
                                style="color: #4872ab;"></i></a>
                        <a href="configuracoes.php" class="left-sidebar hover d-none d-md-block">Configurações</a>
                    </li>
                    <br>
                    <li><a href="perfil.php?idUsuario=<?php echo $sessao_logado?>" class="d-block d-md-none"><i class="fa-solid fa-user"
                                style="color: #4872ab;"></i></a>
                        <a href="perfil.php?idUsuario=<?php echo $sessao_logado?>" class="left-sidebar hover d-none d-md-block">Perfil</a>
                    </li>
                    <br>
                    <li><a class="d-block d-md-none"><i class="fa-solid fa-pen-to-square" data-toggle="modal"
                                data-target="#myModal" style="color: #f68b1f;"></i></a></li>
					 <li><a href="logout.php" class="d-block d-md-none" ><i class="fa-solid fa-right-from-bracket" style="color: #f68b1f;"></i></a>
					<li><a href="logout.php" class="left-sidebar hover d-none d-md-block" style="font-size: 16px; color: #FFAD5A;">Sair da Conta</a></li>

                    <br>
                </ul>
            </div>
            <!-- Button to Open the Modal -->
            

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Publicar postagem</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-1 imagem-usuario"><img class="rounded-circle"
                                        src="<?php echo($icones.$row_rs_post['fotoPerfil']) ?>" alt="" width="44px">
                                </div>
                                <div class="col-xl-9"></div>


                                <form method="post" enctype="multipart/form-data">
                                    <hr>
                                    <div class="col-xl-12" style="text-align: center">
                                        <select name="categoria" id="categoria">
                                        </select>
                                    </div>
                                    <br>
                                    <div class="col-xl-12">
                                        <input size="57" name="titulo" type="text" id="titulo" placeholder="Título"
                                            maxlength="50" required="required">
                                    </div>
                                    <br>
                                    <div style="padding-left: 2px">
                                        <textarea name="descricao" cols="64" rows="8" maxlength="320" id="descricao"
                                            placeholder="Descrição" required="required"></textarea>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-xl-12" style="text-align: center">
                                        <input size="57" name="videos" type="text" id="videos"
                                            placeholder="URL do Video" maxlength="50">
                                        <p style="text-align: center; font-size: 14px;">PS: Coloque somente URL do
                                            Youtube.</p>
                                    </div>
                                    <div class="col-xl-12" style="text-align: center">
                                        <br>
                                        <select name="imagem" id="imagem">
                                        </select>
                                    </div>


                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="submit" class="button-submit">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="left-sidebar d-none d-md-block">
                <br>
                
            <div class="font-info"><pre>Site desenvolvido com o propósito de servir
como projeto integrador do grupo 1 da turma
TI34 do SENAC Lapa Tito. Sem quaisquer
intenção de ferir ou manchar a imagem da
instituíção.</pre></div>

            </div>


        </div>

<!--Inicio conteúdo-->
<div class="col-xl-9 col-lg-7 col-md-7 col-sm-10 col-10" style="text-size-adjust:100%" >
<div class="container main-content flex">
<div class="card">
<div class="card-header header-top">
<div>Notificações</div>


</div>
<br>
<br>
<br>

<?php do { ?>

<hr>
<div class="card-body">

<div class="row">

<div class="card-text col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><strong><?php echo($row_rs_post['titulo'])?></strong></div>
<p class="card-text col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><?php echo($row_rs_post['descricao'])?></p>
<div class="col-xl-12 imagens img-fluid"><img class="imagens card img-fluid" src="imagens/imagens-p/<?php echo($row_rs_post['fotoThumb'])?>" alt="<?php echo($row_rs_post['fotoThumb'])?>"></div>
</div>
</div>

<?php } while($row_rs_post = mysqli_fetch_assoc($rs_post)); ?>   

 

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
     mysqli_free_result($rs_evento);

    //fechar consulta bd/conexão
    mysqli_close($conn_bd_senac);

 

    ?>

</body>

 

</html>