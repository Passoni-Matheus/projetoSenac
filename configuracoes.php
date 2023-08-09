<?php require_once("conexaobd.php"); ?>
<?php 
//começo consulta categoria

$query_rs_categoria = "SELECT * FROM tb_categoria";

$rs_categoria = mysqli_query($conn_bd_senac, $query_rs_categoria) or die(mysqli_error($conn_bd_senac));

$row_rs_categoria = mysqli_fetch_assoc($rs_categoria);

$totalRow_rs_categoria = mysqli_num_rows($rs_categoria);

//fim categoria

//inicio usuario
$query_rs_usuario = "SELECT * from tb_usuarios inner join tb_generos on tb_usuarios.idGenero = tb_generos.idGenero inner join tb_uf on tb_usuarios.idUf = tb_uf.idUf where tb_usuarios.idUsuario = 3;";
	
$rs_usuario = mysqli_query($conn_bd_senac, $query_rs_usuario) or die(mysqli_error($conn_bd_senac));

$row_rs_usuario = mysqli_fetch_assoc($rs_usuario);


//inicio uf

$query_rs_uf = "SELECT * FROM tb_uf";

$rs_uf = mysqli_query($conn_bd_senac, $query_rs_uf) or die(mysqli_error($conn_bd_senac));

$row_rs_uf = mysqli_fetch_assoc($rs_uf);

//fim uf

//inicio genero

$query_rs_genero = "SELECT * FROM tb_generos";

$rs_genero = mysqli_query($conn_bd_senac, $query_rs_genero) or die(mysqli_error($conn_bd_senac));

$row_rs_genero = mysqli_fetch_assoc($rs_genero);

//fim genero






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
    <title>Configurações</title>

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
    <div class="container">
        <div class="left-sidebar">
            <a href="index.html"><img class="leftside-image" src="imagens/senac-logo-0.png" alt="Senac.logo"
                    width="170px"></a>
            <p class="font-sub">Chat rede social de <span style="color: #FFAD5A;">aluno</span> para <span
                    style="color: #FFAD5A;">aluno</span></p>
            <ul class="list-nav">
                <li> <a href="" class="left-sidebar hover">Publicar</a></li>
                <br>
                <li><a href="" class="left-sidebar hover">Notificações</a></li>
                <br>
                <li><a href="" class="left-sidebar hover">Mensagens</a></li>
                <br>
                <li><a href="configuracoes.html" class="left-sidebar hover">Configurações</a></li>
                <br>
            </ul>
        </div>
        <!--main content-->
        <div class="main-content">
            <div class="card">
                <div class=" card-header header-top">
                    <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar"
                                style="width: 567px;" aria-label="Pesquisar">
                        </form>
                    </nav>
                    
                </div>
                <br>
                <br>
                
                <form>
                <div class="card-body">
                    <div class="row">
                        <div class="font-config">Foto</div>
                        <input class="col-xl-3" type="file">
                    </div>

                    <br>
                    <br>
                    <div class="row">
                        <div class="font-config">Nome</div>
                        <input class="col-xl-8" type="text" value="<?php echo($row_rs_usuario['nome'])?>">
                    </div>

                    <br>
                    <br>
                    <div class="row">
                        <div class="font-config col-xl-12">Senha</div>
                        <div class="row">
                            <div class="Sfont-config col-xl-3">Senha atual</div>
                            <input class="col-xl-3" type="text">
                            <div class="Sfont-config col-xl-3">Nova senha</div>
                            <input class="col-xl-3" type="text">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="font-config">E-mail</div>
                        <div class="row">
                            <div class="Sfont-config col-xl-3">E-mail atual</div>
                            <input class="col-xl-3" type="email" value="<?php echo($row_rs_usuario['email'])?>">
                            <div class="Sfont-config col-xl-3">Novo E-mail</div>
                            <input class="col-xl-3" type="email">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="font-config col-xl-12">Telefone</div>
                        <div class="row">
                            <div class="Sfont-config col-xl-3">Telefone atual</div>
                            <input class="col-xl-3" type="text" value="<?php echo($row_rs_usuario['telefone'])?>">
                            <div class="Sfont-config col-xl-3">Novo telefone</div>
                            <input class="col-xl-3" type="text">
                        </div>
                    </div>
                    <br>
                    <br>
                    
                    <div class="font-config">Descrição</div>
                    <textarea name="descricao" rows="7" cols="70" class="col-xl-8"><?php echo($row_rs_usuario['informacoes'])?></textarea>
                    <br>
                    <br>
                    <div class="font-config">Gênero</div>
                    <div class="Sfont-config"> <select name="genero" id="genero">
						<?php do{ ?>
                        <option value="<?php echo($row_rs_genero['idGenero'])?>" <?php if($row_rs_genero['idGenero'] == $row_rs_usuario['idGenero']) {
						echo("selected");
} ?>><?php echo($row_rs_genero['genero'])?></option>
						<?php } while($row_rs_genero = mysqli_fetch_assoc($rs_genero)); ?>
                    </select></div>
                    <br>					
                    <br>
                    <div class="font-config">Estado</div>
                    <select name="estados" id="estados">
						<?php do{ ?>
                        <option value="<?php echo($row_rs_uf['idUf'])?>" <?php if($row_rs_uf['idUf'] == $row_rs_usuario['idUf']) {
						echo("selected");
} ?>><?php echo($row_rs_uf['estado'])?></option>
						<?php } while($row_rs_uf = mysqli_fetch_assoc($rs_uf)); ?>
                    </select>
                    <br>
                    <br>
                    <div class="font-config">Mudar tema</div>
                    <button class="mudar-btn"><i class="fa-regular fa-sun "></i><i class="fa-solid fa-moon"></i></button>
                    <br>
                    <br>
                    <a href=""><div class="font-config">Sair da conta</div></a>
                        
                        <input name="submit" type="submit" id="submit" class="font-config"><br><br>
                        
                    </form>
                    
                    <br>
                    <br>
                </div>
                <hr>
            </div>
        </div>
        <!--right side-bar-->
        <div class="right-sidebar">
            <div class="card-body">
                <div style="text-align: center;">Fulaneiro
                    <i class="fas fa-user"></i>
                </div>
                <br>
                <h3 style="text-align: center;">Eventos</h3>
                <div class="card evento">
                    <img src=""><br>
                    <div class="evento-titulo"><b>Techevent</b></div>
                    <div>SENAC promove evento tecnológico: palestras, workshops e demonstrações de novas tendências e
                        inovações para impulsionar o setor.
                        Imperdível para profissionais e entusiastas da área! #SENACTechEvent</div>
                </div>
                <br>
                <h3 style="text-align: center;">Novidades</h3>
                <div class="card evento">
                    <img src=""><br>
                    <div class="evento-titulo"><b>Máquinas de doces</b></div>
                    <div>SENAC apresenta máquina de doces inovadora: personalização de sabores e opções saudáveis para
                        satisfazer todos os gostos.
                        Delicie-se com essa nova experiência! #SENACSweetMachine</div>
                </div>
            </div>
        </div>
</body>

</html>