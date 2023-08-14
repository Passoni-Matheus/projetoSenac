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
	<link rel="short icon" href="senac-logo.ico">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
	</head>		
	<body class="container" id="grad">
	<h1 class="fonte-zero">SenacChat - Home</h1>
	<!--início barra esquerda-->
		
			<!--<div class="col-xl-12" align="center">
			<h2 class="fonte-zero">Menu</h2>
						<h3 class="fonte-zero">Senac Logo</h3>
						<img src="imagens/senac-logo-0.png" alt="Senac logo" width="500px" style="align-items: center" >
						<h3 class="fonte-zero">Chat rede social de aluno para aluno</h3>
						<p align="center" style="font-size: 25px" >Chat rede social de <span style="color: #FFAD5A;">aluno</span> para <span style="color: #FFAD5A;">aluno</span></p>
			</div>-->
		
		
	<br>

	<div class="left-sidebar d-none d-md-block">
	<br> 

	</div>

		
	<!--<div class="login" style="background-color: crimson" align="center">
		<br>
		<h2> login </h2>

		<form action="login_verifica.php" method="post" >
		  <label for="email">Digite seu Email:</label>
			<br>
		  <input name="email" type="email" required="required" id="email" placeholder="digite seu email">
			<br><br>

		  <label for="senha">Digite sua senha</label>
			<br>
		  <input name="senha" type="password" required="required" id="senha" placeholder="digite sua senha" >
			<br><br>
		  <input type="submit" value="Logar">
		</form> 
			<br><br>

		<p style="color: white"><a href="cadastro.php">Cadastre-se já</a></p>
	</div>-->

	<div class="login">

		<h2 class="login-titulo"> Entre </h2>

		<form action="login_verifica.php" method="post">

			<label for="email">Digite seu Email:</label>
			<br>
		  	<input class="col-sm-12 col-12" name="email"  type="email" required="required" id="email" placeholder="Email" size="40">
			<br><br>
			
		  	<label for="senha">Digite sua senha</label>
			<br>
	  	  <input class=" col-sm-12 col-12" name="senha" type="password" required="required" id="senha" placeholder="Senha" size="40" >
			<br><br>
			
			<input type="checkbox"> Lembrar minha senha
			<br><br>
			
			<p style="color: white"><a href="cadastro.php">Cadastre-se aqui</a></p>
		  <input type="submit" value="Logar">
		</form> 
		
	<br>
	</div>
			
			
		
                <div ><pre class="font-info-2">Site desenvolvido com o propósito de servir
como projeto integrador do grupo 1 da turma
TI34 do SENAC Lapa Tito. Sem quaisquer intenção
de ferir ou manchar a imagem da instituíção.</pre></div>
	
			
			
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>


	</body>

	</html>