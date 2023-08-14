
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Busca usuário - Chat</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
</head>

<body  class="container">
    <div class="card-body">
        <div class="card">
            <br>
            <br>
            <div class="busca-center">
                <div></div>
                <div class="busca-title">
<h1>Busca usuário - Chat</h1>
					</div>
				<br>
	<form action="resultado-busca-chat.php" method="get" enctype="multipart/form-data">
		
	<input name="procurar" type="text" id="procurar"> <br> <br>
	<input type="submit">
	
	</form>
	
	</div>

            <!--aqui vai os posts que tu comentou que queria colocar-->
			<br>
            <div class="busca-center">
                <a href="index.php"><input type="button" value="Voltar"></a>
            </div>
            <br>
        </div>
    </div>
	
</body>
</html>