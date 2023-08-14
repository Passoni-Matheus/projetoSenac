<?php
include("sessaoadm_verifica.php");
require_once("conexaobd.php"); 
//REQUER/INCREMENTA APENAS UMA VEZ >>>ONCE<<<
?>


<?php 
//Criando a variável para consultar no bd com parâmetro de busca

$palavra = $_GET['user'];
//echo $palavra





//rs = require set 
$query_rs_usuarios = "SELECT * FROM tb_usuarios INNER JOIN tb_generos ON tb_generos.idGenero = tb_usuarios.idGenero INNER JOIN tb_uf ON tb_uf.idUf = tb_usuarios.idUf WHERE tb_usuarios.nome like '%$palavra%' OR tb_usuarios.email like '%$palavra%';";


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
<meta charset="utf-8">
<title>usuarios encontrados: <?php 
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
	
	
	<h1><strong>Pesquisa:</strong> usuários que contenham <strong><?php echo($palavra)?></strong> no nome ou email.</h1>
	<a href="adm-procurar.php"><p>Voltar</p></a>
	
	
	
<?php if($totalRow_rs_usuarios > 0) {include("_tabela-usuario.php");} else {echo("Dado não encontrado!");}?>
	<?php
	//Limpando a memória de consulta
	mysqli_free_result($rs_usuarios);

	//fechar consulta bd/conexão
	mysqli_close($conn_bd_senac);

	?>
</body>
</html>
