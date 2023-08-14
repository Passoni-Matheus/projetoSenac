	<?php require_once("conexaobd.php");?>
	<?php
	$query_rs_uf = "SELECT * FROM tb_uf order by estado ASC";

	$rs_uf = mysqli_query($conn_bd_senac, $query_rs_uf) or die(mysqli_error($conn_bd_senac));

	$row_rs_uf = mysqli_fetch_assoc($rs_uf);

	//inicio genero

	$query_rs_genero = "SELECT * FROM tb_generos";

	$rs_genero = mysqli_query($conn_bd_senac, $query_rs_genero) or die(mysqli_error($conn_bd_senac));

	$row_rs_genero = mysqli_fetch_assoc($rs_genero);

	//fim genero
 
	
	
	if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['idUf']) && isset($_POST['telefone']) && isset($_POST['genero'])){
		
		
	 if($_POST['senha'] == $_POST['senhaconfirmar']){
	//inicio verificação email repetido
	$email = $_POST['email'];
		 
	$query_rs_email = "SELECT * FROM tb_usuarios WHERE email = '$email'";
		 
	$rs_email = mysqli_query($conn_bd_senac, $query_rs_email) or die(mysqli_error($conn_bd_senac));

	$numRow_rs_email = mysqli_num_rows($rs_email);

	//fim verificação email repetido
		if($numRow_rs_email == 0){
		
		if($_POST['genero'] == "2"){
			$fotoPerfil = "aluna.png";
		} else {
			$fotoPerfil = "aluno.png";
		}
		
		
		
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = md5($_POST['senha']);
		$idUf = $_POST['idUf'];
		$telefone = $_POST['telefone'];
		$genero = $_POST['genero'];
	
		
	// inicio cadastro
	$query_rs_cadastrar = "INSERT INTO tb_usuarios (idUsuario, dataCad, nome, fotoPerfil, email, senha, posto, idUf, suspenso, telefone, nascimento, idGenero, informacoes, ip) VALUES (NULL, 'current_timestamp()', '$nome', '$fotoPerfil', '$email', '$senha', '0', '$idUf', '0', '$telefone', '', '$genero', '', '');";
		
	$rs_cadastrar = mysqli_query($conn_bd_senac, $query_rs_cadastrar) or die(mysqli_error($conn_bd_senac));
	header("Location: preLogin.php");
		} else{
		echo('<script> alert("Este email já está registrado. Tente outro!"); 
		window.location.href="cadastro.php";
		</script>');
		}
			} else {
		 echo('<script> alert("Senhas não correspondentes. Tente novamente!"); 
		window.location.href="cadastro.php";
		</script>');
	 }
		}
	// fim cadastro
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
	<title>SenacChat - Cadastro</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="short icon" href="senac-logo.ico">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
	</head>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<body class="container" id="grad">
	<h1 class="fonte-zero">SenacChat - Cadastro</h1>
	<!--início barra esquerda-->
		
			<!--<div class="col-xl-12" align="center">
			<h2 class="fonte-zero">Menu</h2>
						<h3 class="fonte-zero">Senac Logo</h3>
						<img src="imagens/senac-logo-0.png" alt="Senac logo" width="500px" style="align-items: center" >
						<h3 class="fonte-zero">Chat rede social de aluno para aluno</h3>
						<p align="center" style="font-size: 25px" >Chat rede social de <span style="color: #FFAD5A;">aluno</span> para <span style="color: #FFAD5A;">aluno</span></p>
			</div>-->
		
		
	<br>
	</section>
	<div class="col-12">
	<br> 
	
	</div>
	</section>
		
	<!--<div class="login" style="background-color: crimson" align="center">
		<br>
		<h2 class="login-titulo"> Cadastre-se </h2>

		<form method="post" enctype="multipart/form-data">
			
			<label for="nome">*Nome:</label>
			<br>
		  <input name="nome" type="text" required="required" id="nome" placeholder="">
			<br><br>
			
			<label for="genero">*Gênero: </label><br>
			<select name="genero" id="genero" required>
				< ?php do {?>
			<option value="< ?php echo($row_rs_genero['idGenero'])?>">< ?php echo($row_rs_genero['genero'])?></option>
				< ?php } while($row_rs_genero = mysqli_fetch_assoc($rs_genero));?>
			</select>
			<br><br>
			
		  <label for="email">*Digite seu Email:</label>
			<br>
		  <input name="email" type="text" required="required" id="email" placeholder="digite seu email">
			<br><br>
			
			<label for="nome">Código de Professor:</label>
			<br>
		  <input name="posto" type="text" id="posto" placeholder="">
			<p style="font-size: 12px">PS: Ignore o campo se você não tiver o código.</p>
			<br>
			
		  <label for="idUf">*Estado: </label><br>
			<select name="idUf" id="idUf" required>
				< ?php do {?>
			<option value="< ?php echo($row_rs_uf['idUf'])?>">< ?php echo($row_rs_uf['estado'])?></option>
				< ?php } while($row_rs_uf = mysqli_fetch_assoc($rs_uf));?>
			</select>
			<br><br>
			
			<label for="telefone">Telefone:</label>
			<br>
		  <input name="telefone" type="text" id="telefone">
			<br><br>
			
		  <label for="senha">*Digite sua senha:</label>
			<br>
		  <input name="senha" type="password" required="required" id="senha" placeholder="digite sua senha">
			<br><br>
			
			<label for="senhaconfirmar">*Confirme sua senha:</label>
			<br>
		  <input name="senhaconfirmar" type="password" required="required" id="senhaconfirmar" placeholder="confirme sua senha" >
			<br><br>
		  <input type="submit" value="Cadastrar-se">
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
</pre>	-->
			
			<div class="login">
		<h2 class="login-titulo"> Cadastre-se </h2>
		
		<p>Já possui conta?</p>
		<a class="btn btn-info" href="preLogin.php" role="button">Faça Login</a>
		<br><br>
		
		<form method="post" enctype="multipart/form-data">
			
			<label for="nome">Nome *</label>
			<br>
		  <input class="col-12" name="nome" type="text" required="required" id="nome" placeholder="">
			<br><br>
			
			<label for="genero">Gênero *</label><br>
			<select name="genero" id="genero" required>
				<?php do {?>
			<option value="<?php echo($row_rs_genero['idGenero'])?>"><?php echo($row_rs_genero['genero'])?></option>
				<?php } while($row_rs_genero = mysqli_fetch_assoc($rs_genero));?>
			</select>
			<br><br>
			
		  <label for="email">Digite seu Email *</label>
			<br>
		  <input class="col-12" name="email" type="email" required="required" id="email" placeholder="digite seu email">
			<br><br>
			
		 <label for="idUf">Estado: </label><br>
			<select class="col-12" name="idUf" id="idUf" required>
				<?php do {?>
			<option  value="<?php echo($row_rs_uf['idUf'])?>"><?php echo($row_rs_uf['estado'])?></option>
				<?php } while($row_rs_uf = mysqli_fetch_assoc($rs_uf));?>
			</select>
			
			<br><br>
			
			<label for="telefone">Telefone:</label>
			<br>
		  <input class="col-12" name="telefone" type="text" id="telefone">
			<br><br>
			
		  <label for="senha">Digite sua senha *</label>
			<br>
		  <input class="col-12" name="senha" type="password" required="required" id="senha" placeholder="digite sua senha">
			<br><br>
			
			<label for="senhaconfirmar">Confirme sua senha *</label>
			<br>
		  <input class="col-12" name="senhaconfirmar" type="password" required="required" id="senhaconfirmar" placeholder="confirme sua senha" >
			<br><br>
			<input class="col-12" name="ToS" type="checkbox" required="required" id="ToS"> Aceito os <a href="#">Termos de Uso e Privacidade</a>
			
			<br><br>
			<input class="col-12" type="submit" value="Submit">
		</form> 
			<br><br>

		
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
	mysqli_free_result($rs_uf);
 	mysqli_free_result($rs_genero);
	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>
	

	</body>

	</html>