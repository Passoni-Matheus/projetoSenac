<?php include("sessao_verifica.php"); 
require_once("conexaobd.php"); ?>
<?php 
$sessao_logado = $_SESSION['idUsuario'];
$GLOBALS['senhaconfig'] = "";
//começo consulta categoria

$query_rs_categoria = "SELECT * FROM tb_categoria";

$rs_categoria = mysqli_query($conn_bd_senac, $query_rs_categoria) or die(mysqli_error($conn_bd_senac));

$row_rs_categoria = mysqli_fetch_assoc($rs_categoria);

$totalRow_rs_categoria = mysqli_num_rows($rs_categoria);

//fim categoria

//inicio usuario
$query_rs_usuario = "SELECT * from tb_usuarios inner join tb_generos on tb_usuarios.idGenero = tb_generos.idGenero inner join tb_uf on tb_usuarios.idUf = tb_uf.idUf where tb_usuarios.idUsuario = $sessao_logado;";
	
$rs_usuario = mysqli_query($conn_bd_senac, $query_rs_usuario) or die(mysqli_error($conn_bd_senac));

$row_rs_usuario = mysqli_fetch_assoc($rs_usuario);


//inicio uf

$query_rs_uf = "SELECT * FROM tb_uf order by estado ASC";

$rs_uf = mysqli_query($conn_bd_senac, $query_rs_uf) or die(mysqli_error($conn_bd_senac));

$row_rs_uf = mysqli_fetch_assoc($rs_uf);

//fim uf

//inicio genero

$query_rs_genero = "SELECT * FROM tb_generos";

$rs_genero = mysqli_query($conn_bd_senac, $query_rs_genero) or die(mysqli_error($conn_bd_senac));

$row_rs_genero = mysqli_fetch_assoc($rs_genero);

//fim genero

//começo atualizar informações
if(isset($_POST['nome']) && isset($_POST['fotoPerfil']) && isset($_POST['estados']) && isset($_POST['genero'])){
	if($_POST['senhanova'] == ""){
		$senhaconfig = $row_rs_usuario['senha'];
	} else {
		$senhaconfig = md5($_POST['senhanova']);
	}
if($_POST['senhanova'] == $_POST['senhaatual']) {
	  	
$nome = $_POST['nome'];
$fotoPerfil = $_POST['fotoPerfil'];
$idUf = $_POST['estados'];
$telefone = $_POST['telefonenovo'];
$idGenero = $_POST['genero'];
$descricao = $_POST['descricao'];
	
$query_rs_atualizar = "UPDATE tb_usuarios SET nome = '$nome', fotoPerfil = '$fotoPerfil', senha = '$senhaconfig', idUf = '$idUf', telefone = '$telefone', idGenero = '$idGenero', informacoes = '$descricao' WHERE tb_usuarios.idUsuario = $sessao_logado;";

$rs_atualizar = mysqli_query($conn_bd_senac, $query_rs_atualizar) or die(mysqli_error($conn_bd_senac));

//fim atualizar informações

} else {
	echo('<script> alert("Senhas não correspondentes. Tente novamente!"); 
		window.location.href="configuracoes.php";
		</script>');
	
}

	
}



?>


<!DOCTYPE html>
<html lang="pt-br">

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
<div class="col-xl-3 col-lg-4 col-md-5 col-sm-2 col-2">
      
		</div>
   
    <div class="container">
		
        <!--main content-->
	  <div class="col-xl-9 col-lg-8 col-md-7 col-sm-10 col-10">
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
                
                <form method="post" enctype="multipart/form-data" id="form_editar">
                <div class="card-body">
                    <div class="row">
                        <div class="font-config">Foto </div>
                        <select name="fotoPerfil" id="fotoPerfil">
							<?php if($row_rs_usuario['posto'] == 0){
										echo('<option value="aluno.png">aluno.png</option>
										<option value="aluna.png">aluna.png</option> ');
									} else { echo('<option value="professor.png">professor.png</option>
						<option value="professora.png">professora.png</option>');
												}?>
												</select>
                    </div>

                    <br>
                    <br>
                    <div class="row">
                        <div class="font-config">Nome</div>
                        <input class="col-xl-8" type="text" value="<?php echo($row_rs_usuario['nome'])?>" name="nome" id="nome">
                    </div>

                    <br>
                    <br>
                    <div class="row">
                        <div class="font-config col-xl-12">Senha</div>
                        <div class="row">
                            <div class="Sfont-config col-xl-3">Nova senha</div>
                            <input class="col-xl-3" name="senhaatual" type="password" id="senhaatual">
							
                            <div class="Sfont-config col-xl-3">Confirmar senha</div>
                            <input class="col-xl-3" type="password" name="senhanova" id="senhanova">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="font-config">E-mail</div>
                        <div class="row">
                            <div class="Sfont-config col-xl-3">E-mail atual</div>
                            <input name="emailatual" type="email"  disabled class="col-xl-5" id="emailatual" value="<?php echo($row_rs_usuario['email'])?>" size="200">
                            <!--<div class="Sfont-config col-xl-3">Novo E-mail</div>
                            <input class="col-xl-3" type="email" name="emailnovo" id="emailnovo">-->
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="font-config col-xl-12">Telefone</div>
                        <div class="row">
                    
                            <div class="Sfont-config col-xl-6">Novo telefone</div>
                            <input class="col-xl-6" type="text" name="telefonenovo" id="telefonenovo">
                        </div>
                    </div>
                    <br>
                    <br>
                    
                    <div class="font-config">Descrição</div>
                    <textarea name="descricao" rows="7" cols="70" class="col-xl-8" id="descricao"><?php echo($row_rs_usuario['informacoes'])?></textarea>
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
                    <input name="submit" type="submit" id="submit" class="font-config"><br><br>
                    </form>
					
					<div class="font-config"><a href="index.php">Voltar</a></div>
                    
                    <br>
                    <br>
                </div>
                <hr>
              </div>
			</div>
        </div>
        <!--right side-bar-->
        <?php
		
	//Limpando a memória de consulta
	mysqli_free_result($rs_usuario);
 	mysqli_free_result($rs_genero);
	mysqli_free_result($rs_uf);
	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);
		
		?>
		
</body>

</html>