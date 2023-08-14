<?php include("sessaoadm_verifica.php");?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>adm - Pesquisar</title>


<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #B8D6FF ">
<h1>adm - Pesquisar</h1>
<a href="logout.php">Sair</a>
<br><br><br><br>


<nav class="navbar navbar-light bg-light flexbar" style="font-size: 25px">
		
	Pesquise um usuário (nome ou email):
		
<form action="resultado-busca.php" class="form-inline my-2 my-lg-0" id="form_user" method="get">	
		  <input class="form-control mr-sm-2" style="width: 600px;" type="search" placeholder="Pesquisar"
			aria-label="Pesquisar" name="user" id="user">
	
		
	<input type="submit" placeholder="Pesquisar"></form>

	
	</nav>
	
	<br><br>

	
<nav class="navbar navbar-light bg-light flexbar" style="font-size: 25px">
	Pesquise um post (Titulo ou descrição):
	
  <form action="resultado-post.php" class="form-inline my-2 my-lg-0" id="form_post" method="get">
		  <input class="form-control mr-sm-2" style="width: 600px;" type="search" placeholder="Pesquisar"
			aria-label="Pesquisar" name="post" id="post">
	  <input type="submit" placeholder="Pesquisar">
		</form>
</nav>
	<br>
<br>
<br>
<br>

	<a href="criar-evento.php">Criar post de evento</a>

	
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>