<!--<?php
include("sessao_verifica.php");
require_once("conexaobd.php");
?>
<?php

$sessao_logado = $_SESSION['idUsuario'];

$procurar = $_GET['procurar'];


$query_rs_usuario = "SELECT * FROM tb_usuarios WHERE idUsuario != $sessao_logado and nome like '%$procurar%'";

$rs_usuario = mysqli_query($conn_bd_senac, $query_rs_usuario) or die(mysqli_error($conn_bd_senac));

$row_rs_usuario = mysqli_fetch_assoc($rs_usuario);

$totalRow_rs_usuario = mysqli_num_rows($rs_usuario);
//

if($procurar == '' || $procurar == ' ') {
    $totalRow_rs_usuario = 0;
}

?>
-->

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Busca usuário - Chat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
<link rel="short icon" href="senac-logo.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
</head>

<body class="container">
    <div class="card-body">
        <div class="card">
            <br>
            <br>
            <div class="busca-center">
            <h1 class="busca-title">Busca usuário - Chat</h1>
            <form action="resultado-busca-chat.php" method="get" enctype="multipart/form-data">

                <input name="procurar" type="text" id="procurar" placeholder="Digite um nome" size="50"> <br> <br>
                <input type="submit" placeholder="Pesquisar" value="Procurar">

            </form>
            <hr>

            <?php if($totalRow_rs_usuario > 0){?>
            <?php do {?>
            <img class="img-fluid" src="<?php echo($icones.$row_rs_usuario['fotoPerfil']);?>">
            <a href="chat.php?idUsuario=<?php echo($row_rs_usuario['idUsuario'])?>">
                <h2>
                    <?php echo($row_rs_usuario['nome'])?>
                </h2>
            </a><br>
            <p class="busca-informa">
                <?php echo($row_rs_usuario['informacoes'])?>
            </p>
            <hr>
            <?php } while ($row_rs_usuario = mysqli_fetch_assoc($rs_usuario));?>
            <?php } else {

    echo("Nenhum usuário encontrado!");

}?>
        </div>
    </div>
</div>
	
	<?php
	//Limpando a memória de consulta
	mysqli_free_result($rs_usuario);
	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>
	
</body>

</html>