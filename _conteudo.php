<section>		
<h2 class="fonte-zero">Publicações</h2>
	
	
	<script>
    function copiarTexto() {
        let textoCopiado = document.getElementById("texto");
        textoCopiado.select();
        textoCopiado.setSelectionRange(0, 99999)
        document.execCommand("copy");
        alert("O texto é: " + textoCopiado.value);
    }
</script>
	
	
			<?php do { ?>
				   <div class="card-body">
					   <section>
                        <div class="row">
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 imagem-usuario"><a href="perfil.php?idUsuario=<?php echo($row_rs_post['idUsuario']);?>"><img class="rounded-circle" src="<?php echo($icones.$row_rs_post['fotoPerfil']) ?>" alt="" width="44px"></a></div>
                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-7 <?php if($row_rs_post['posto'] == 0) {
						echo("nome-usuario-2"); 
							}
						  else { 
							  echo("nome-usuario"); 
						  			} ?>"><a href="perfil.php?idUsuario=<?php echo($row_rs_post['idUsuario']);?>"><?php echo($row_rs_post['nome'])?></a></div>
                            
                            
							<a id="texto" href="post.php?idPost=<?php echo($row_rs_post['idPost'])?>" class="link-post" id="link_post" title="<?php echo($row_rs_post['titulo'])?>">
								<h3 class="card-text col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 titulo">● <?php echo($row_rs_post['titulo'])?></h2>
								<p class="card-text col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><?php echo($row_rs_post['descricao'])?></p>
                                 <div class="col-xl-12"><img class="imagens card img-fluid" src="imagens/imagens-p/<?php echo($row_rs_post['fotoThumb'])?>" alt="<?php echo($row_rs_post['fotoThumb'])?>"></div>
                                <div class="col-xl-12 col-lg-12 hidden">●</div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 font-center"><a href="vote.php?idPost=<?php echo($row_rs_post['idPost'])?>"><img src="imagens/vote.png" width="25" height="25" title="Vote"></a></div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 font-center"><a href="#" onClick="copiarTexto()"><img  src="imagens/senac-logo-0 shareicon.png" title="Compartilhar" alt="Compartilhar" width="25" height="20"></a></div>     
                        </div>
						 	</a> 
						   
  </section>
					   
                    			</div>
	
	
				
                    <hr>
	
	

					<?php } while($row_rs_post = mysqli_fetch_assoc($rs_post)); ?>
 </section>	