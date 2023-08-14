<?php
include("sessao_verifica.php");
require_once("conexaobd.php");
?>
<?php




if(isset($_GET['idUsuario'])) {
	$idUsuario2 = $_GET['idUsuario'];
}

$sessao_logado = $_SESSION['idUsuario'];

$query_rs_verifica = "SELECT * FROM tb_chat where idUsuario = $sessao_logado and idUsuario2 = $idUsuario2;";

$rs_verifica = mysqli_query($conn_bd_senac, $query_rs_verifica) or die(mysqli_error($conn_bd_senac));

$totalRow_rs_verifica = mysqli_num_rows($rs_verifica);

//

	$query_rs_idchat = "SELECT * FROM tb_chat WHERE idUsuario = $sessao_logado and idUsuario2 = $idUsuario2 or idUsuario = $idUsuario2 and idUsuario2 = $sessao_logado";
	
	$rs_idchat = mysqli_query($conn_bd_senac, $query_rs_idchat) or die(mysqli_error($conn_bd_senac));

	$row_rs_idchat = mysqli_fetch_assoc($rs_idchat);

	$idChat = $row_rs_idchat['idChat'];
//

if($totalRow_rs_verifica == 0) {
	$query_rs_criar = "INSERT INTO tb_chat (idChat, idUsuario, idUsuario2, dataCad) VALUES (NULL, '$sessao_logado', '$idUsuario2', current_timestamp())";
	
	$rs_criar = mysqli_query($conn_bd_senac, $query_rs_criar) or die(mysqli_error($conn_bd_senac));
	
	header("Location: chat.php?idUsuario=$idUsuario2");
} else {
	

	
	
//

$query_rs_usuario1 = "SELECT * FROM tb_usuarios INNER JOIN tb_generos ON tb_usuarios.idGenero = tb_generos.idGenero WHERE tb_usuarios.idUsuario = $sessao_logado";

$rs_usuario1 = mysqli_query($conn_bd_senac, $query_rs_usuario1) or die(mysqli_error($conn_bd_senac));

$row_rs_usuario1 = mysqli_fetch_assoc($rs_usuario1);
//


$query_rs_usuario2 = "SELECT * FROM tb_usuarios INNER JOIN tb_generos ON tb_usuarios.idGenero = tb_generos.idGenero WHERE tb_usuarios.idUsuario = $idUsuario2";

$rs_usuario2 = mysqli_query($conn_bd_senac, $query_rs_usuario2) or die(mysqli_error($conn_bd_senac));

$row_rs_usuario2 = mysqli_fetch_assoc($rs_usuario2);
//


$query_rs_mensagem1 = "SELECT * FROM tb_mensagens INNER JOIN tb_chat ON tb_mensagens.idChat = tb_chat.idChat WHERE tb_mensagens.idUsuario = $sessao_logado";

$rs_mensagem1 = mysqli_query($conn_bd_senac, $query_rs_mensagem1) or die(mysqli_error($conn_bd_senac));

$row_rs_mensagem1 = mysqli_fetch_assoc($rs_mensagem1);

$totalRow_rs_mensagem1 = mysqli_num_rows($rs_mensagem1);
//
$query_rs_mensagem2 = "SELECT * FROM tb_mensagens INNER JOIN tb_chat ON tb_mensagens.idChat = tb_chat.idChat WHERE tb_mensagens.idUsuario = $idUsuario2";

$rs_mensagem2 = mysqli_query($conn_bd_senac, $query_rs_mensagem2) or die(mysqli_error($conn_bd_senac));

$totalRow_rs_mensagem2 = mysqli_fetch_assoc($rs_mensagem2);

$totalRow_rs_mensagem2 = mysqli_num_rows($rs_mensagem2);
//
	
	
	$query_rs_pegar = "SELECT * FROM tb_chat INNER JOIN tb_mensagens ON tb_mensagens.idChat = tb_chat.idChat INNER JOIN tb_usuarios ON tb_usuarios.idUsuario = tb_mensagens.idUsuario WHERE tb_chat.idUsuario = $sessao_logado and tb_chat.idUsuario2 = $idUsuario2 or tb_chat.idUsuario = $idUsuario2 and tb_chat.idUsuario2 = $sessao_logado ORDER BY tb_mensagens.dataCad ASC";
	
	// SELECT * FROM tb_chat INNER JOIN tb_mensagens ON tb_mensagens.idChat = tb_chat.idChat INNER JOIN tb_usuarios ON tb_usuarios.idUsuario = tb_mensagens.idUsuario WHERE tb_chat.idChat = $idChat ORDER BY tb_mensagens.dataCad ASC
	
	$rs_pegar = mysqli_query($conn_bd_senac, $query_rs_pegar) or die(mysqli_error($conn_bd_senac));
	
	$row_rs_pegar = mysqli_fetch_assoc($rs_pegar);
	
	
	$query_rs_iddochat = "SELECT idChat FROM tb_chat WHERE idUsuario = $sessao_logado and idUsuario2 = $idUsuario2 or idUsuario = $idUsuario2 and idUsuario2 = $sessao_logado";
	
	$rs_iddochat = mysqli_query($conn_bd_senac, $query_rs_iddochat) or die(mysqli_error($conn_bd_senac));
		
	$row_rs_iddochat = mysqli_fetch_assoc($rs_iddochat);
	
	if(isset($_POST['send'])) {
		$iddochat = $_POST['iddochat'];
		$mensagem = $_POST['send'];
		
	$query_rs_enviarmsg = "INSERT INTO tb_mensagens (idMensagem, idChat, idUsuario, mensagem, dataCad) VALUES (NULL, '$iddochat', '$sessao_logado', '$mensagem', current_timestamp());";
	
	$rs_enviarmsg = mysqli_query($conn_bd_senac, $query_rs_enviarmsg) or die(mysqli_error($conn_bd_senac));
		
	header("Location: chat.php?idUsuario=$idUsuario2");
	}
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Chat -
        <?php echo($row_rs_usuario2['nome'])?>
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
</head>

<body class="container">
    <div class="card-body">
        <div class="card">
            <br>
            <a class="busca-center" href="index.php">Página Inicial</a>
            <br>
            <!--local pra colocar o perfil da pessoa-->
            <div id="user-chat" style="text-align: center;"><a href="perfil.php?idUsuario=<?php echo($idUsuario2);?>"><img class="rounded-circle" src="<?php echo($icones.$row_rs_usuario2['fotoPerfil']) ?>" alt="" width="70px"> <b><p class="busca-title"><strong><?php echo($row_rs_usuario2['nome'])?></strong></a></div>
            <hr>
            <br>
            <?php if($totalRow_rs_mensagem1 > 0 || $totalRow_rs_mensagem2 > 0) { ?>

            <?php do {?>
           <img class="rounded-circle" src="<?php echo($icones.$row_rs_pegar['fotoPerfil']) ?>" alt="" width="44px"><strong><p class="busca-title">
                <?php echo($row_rs_pegar['nome']." disse:")?>
				</p></strong>
            <p>
                <?php echo($row_rs_pegar['mensagem'])?>
            </p>

            <hr>

            <?php }while($row_rs_pegar = mysqli_fetch_assoc($rs_pegar));?>

            

            <?php } else {echo("Mande uma mensagem para este usuário! :)");} ?>
        <form action="chat.php?idUsuario=<?php echo($idUsuario2)?>" method="post" enctype="multipart/form-data">
                <input name="iddochat" type="hidden" id="iddochat" value="<?php echo($row_rs_iddochat['idChat'])?>">
                <input name="send" type="text" id="send" placeholder="Digite sua mensagem: " size="53"><input
                    type="submit">
            </form>
		</div>
    </div>
			
				<?php
	//Limpando a memória de consulta
	mysqli_free_result($rs_verifica);
 	mysqli_free_result($rs_idchat);
	mysqli_free_result($rs_usuario1);
 	mysqli_free_result($rs_usuario2);
	mysqli_free_result($rs_mensagem1);
 	mysqli_free_result($rs_mensagem2);
	mysqli_free_result($rs_pegar);
 	mysqli_free_result($rs_iddochat);
	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>
</body>

</html>