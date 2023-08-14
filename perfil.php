<?php require_once("conexaobd.php");?>
<?php 
//inicio selecionar perfil especifico
if(isset($_GET['idUsuario'])){
	$idUsuario = $_GET['idUsuario'];
}
//fim selecionar perfil especifico

//começo usuario
$query_rs_usuario = "SELECT * FROM tb_usuarios INNER JOIN tb_generos ON tb_generos.idGenero = tb_usuarios.idGenero INNER JOIN tb_uf ON tb_uf.idUf = tb_usuarios.idUf WHERE tb_usuarios.idUsuario = $idUsuario";

$rs_usuario = mysqli_query($conn_bd_senac, $query_rs_usuario) or die(mysqli_error($conn_bd_senac));

$row_rs_usuario = mysqli_fetch_assoc($rs_usuario);

$totalRow_rs_usuario = mysqli_num_rows($rs_usuario);

//fim usuario

//inicio post do usuario
$query_rs_post = "SELECT * FROM tb_posts INNER JOIN tb_usuarios ON tb_posts.idUsuario = tb_usuarios.idUsuario INNER JOIN tb_imagens ON tb_imagens.idImagem = tb_posts.idImagem INNER JOIN tb_categoria ON tb_categoria.idCategoria = tb_posts.idCategoria WHERE tb_posts.evento = 0 and tb_usuarios.idUsuario = $idUsuario";

$rs_post = mysqli_query($conn_bd_senac, $query_rs_post) or die(mysqli_error($conn_bd_senac));

$row_rs_post = mysqli_fetch_assoc($rs_post);

$totalRow_rs_post = mysqli_num_rows($rs_post);
//fim post do usuario








?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($row_rs_usuario['nome']);?> - Perfil SenacChat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
	<link rel="short icon" href="senac-logo.ico">
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
                    <li><a href="perfil.php?idUsuario=<?php echo $idUsuario?>" class="d-block d-md-none"><i class="fa-solid fa-user"
                                style="color: #4872ab;"></i></a>
                        <a href="perfil.php?idUsuario=<?php echo $idUsuario?>" class="left-sidebar hover d-none d-md-block">Perfil</a>
                    </li>
                    <br>
                   
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
                <pre>
            <div class="font-info">Site desenvolvido com o propósito de servir
como projeto integrador do grupo 1 da turma
TI34 do SENAC Lapa Tito. Sem quaisquer
intenção de ferir ou manchar a imagem da
instituíção.</div>
</pre>
            </div>


        </div>

        <!--Inicio conteúdo-->
        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-10 col-10">
            <div class="container main-content flex">
                <div class="card">
                    <div class=" card-header top-bar header-top">
                        <div class="row barra">
							<div class="col-xl-1"></div>
							<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-5 ctr"><a href="index.php" style="color: #ffad5a; text-decoration: none" class="mudar !important">Para você</div></a>
							<div class="col-xl-2 col-lg-4 col-md-2 col-sm-2 col-2 ctr">|</div>
							<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-5 ctr"><a href="em_alta.php" style="color: #4872ab; text-decoration: none" class="mudar !important">Em Alta</div></a>
							<div class="col-xl-1"></div>
						</div>
						</div>
                </div>
                <div>
                    <div class="card-body">

                        <div class="row">
                            <div class="container">
                                <div class="container">
                                    <hr>
                                    <div class="perfil-card">
                                        <img src="<?php echo($icones.$row_rs_usuario['fotoPerfil'])?>" alt="<?php echo $row_rs_usuario['fotoPerfil']?>" class="perfil-imagem">
                                        <h2 class="perfil-nome"><?php echo($row_rs_usuario['nome'])?></h2>
										<p class=" <?php if($row_rs_usuario['posto'] == 0) {echo("perfil-discente");} else {echo("perfil-docente");} ?>"><?php if($row_rs_usuario['posto'] == 0) {echo("Discente✏️");} else {echo("Docente📖");}?></p>
                                        <p class="perfil-bio"><?php echo($row_rs_usuario['informacoes'])?></p>
										
										<div style="text-align: center; font-size: 22px; color: #4872ab;"><a href="chat.php?idUsuario=<?php echo($idUsuario)?>"><i class="fa-regular fa-message"></i></a></div>
										
                                    </div>
                                </div>
                                
								<p class="post-perfil">Posts de <?php echo($row_rs_usuario['nome'])?></p>
								<p class="totpost-perfil">(<?php echo($totalRow_rs_post)?>) posts</p>
								<hr>
                            </div>
							<?php if($totalRow_rs_post > 0) { include("_post-perfil.php");} else {
	
							echo("<div class='post-perfil'>Sem posts encontrados</div>");
}?>
                        </div>
                        
                    </div>

                    <hr>
                </div>
                
            </div>

           
        </div>
    </div>
    </div>
    <!--Inicio barra direita-->
    <div class="col-xl-3 margem-top">

    </div>
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
 	mysqli_free_result($rs_usuario);
	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>

</body>

</html>