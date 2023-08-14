<?php 
include("sessaoadm_verifica.php");
require_once("conexaobd.php"); 
//REQUER/INCREMENTA APENAS UMA VEZ >>>ONCE<<<
?>


<?php 
//Criando a variável para consultar no bd com parâmetro de busca
mysqli_set_charset($conn_bd_senac, "utf8");
$palavra = $_GET['post'];
//echo $palavra





//rs = require set 
$query_rs_usuarios = "SELECT * FROM tb_posts INNER JOIN tb_usuarios ON tb_usuarios.idUsuario = tb_posts.idUsuario INNER JOIN tb_categoria ON tb_categoria.idCategoria = tb_posts.idCategoria INNER JOIN tb_imagens ON tb_imagens.idImagem = tb_posts.idImagem WHERE tb_posts.titulo LIKE '%$palavra%' or tb_posts.titulo LIKE '%$palavra%'";


//executar consulta
$rs_usuarios = mysqli_query($conn_bd_senac, $query_rs_usuarios) or die(mysqli_error($conn_bd_senac));


//obter a linha da consulta visualmente
$row_rs_usuarios = mysqli_fetch_assoc($rs_usuarios);
	
//obter o número total de registros	
$totalRow_rs_usuarios = mysqli_num_rows($rs_usuarios);



//echo("usuarios registrados: ".$totalRow_rs_usuarios." ");
//echo($row_rs_usuarios['idusuarios']);
if (isset($palavra)){

} else {
	$totalRow_rs_usuarios = 0;
}

if($palavra == '' || $palavra == ' ') {
	$totalRow_rs_usuarios = 0;
}


?>



<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Posts encontrados: <?php 
	echo($totalRow_rs_usuarios)?> - Senac</title>
	
	<!-- Breve comentário do site -->
	
	<meta name="description" content="Desenvolvimento de usuarios de tecnologia">

	<!-- Palavras chaves para Google -->
	
	<meta name="keywords" content="ti, usuarios, senac, tecnologia, html5, css3, php, web, sql, mysql, informática, websites">
	
	<!-- CSS, Bootstrap e JS -->
	<link href="bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="meus_estilos.css" rel="stylesheet" type="text/css"> 
	
	<!-- Ícones -->
	
	<link rel="short icon" href="favicon.ico">
	
	<!-- Metatag responsiva -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- WowSlider -->
	<link rel="stylesheet" type="text/css" href="galeria/engine1/style.css">
	<script src="galeria/engine1/jquery.js"></script>
	 
	<!-- LightBox -->
	<link href="lightbox2/dist/css/lightbox.min.css" rel="stylesheet" type="text/css">
	
	<!-- Font Awesome -->
	<link href="font-awesome/css/all.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	body,td,th {
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
    color: #010101;
}
body {
    background-color: #FFFFFF;
}
    </style>
<script src="font-awesome/js/all.js"></script>
	
	
	</head>

<body>
	
	
	<h1><strong>Pesquisa:</strong>Post que contenham <strong><?php echo($palavra)?></strong> no titulo ou descrição.</h1>
	<a href="adm-procurar.php"><p>Voltar</p></a>
	
	
	
<table width="100%" border="1">
<tbody>
  <tr></tr>
</tbody>
<tbody>
  <tr>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Titulo</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col">Descrição</th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Video</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Imagem</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Categoria</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Evento</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Ativo</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Usuário</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Desativar/Ativar post</strong></th>
  </tr>
	
  <?php do{ ?>
	<tr>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['titulo'])?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['descricao'])?></td>
    <td align="center" valign="middle"><?php if($row_rs_usuarios['videos'] == "" or $row_rs_usuarios['videos'] == " ") {echo("Não tem vídeo.");} else {echo($row_rs_usuarios['videos']);
	}?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['fotoThumb'])?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['categoria'])?></td>
    <td align="center" valign="middle"><?php if($row_rs_usuarios['evento'] == 0 ){echo("Não é evento.");} else {echo("É evento.");}?></td>
    <td align="center" valign="middle"><?php if($row_rs_usuarios['ativo'] == 0 ){echo("Post desativado");} else {echo("Post ativo.");}?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['nome'])?></td>
    <td align="center" valign="middle"><a href="desativar.php?idUsuario=<?php echo($row_rs_usuarios['idUsuario'])?>" onClick="return confirm('Deseja mesmo desativar este post?')">🔒</a></td>
	  
  </tr>
 <?php } while($row_rs_usuarios = mysqli_fetch_assoc($rs_usuarios)); ?>
</tbody>
<tbody>
</tbody>
</table>
	
	<?php
	//Limpando a memória de consulta
	mysqli_free_result($rs_usuarios);
	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>
</body>
</html>
