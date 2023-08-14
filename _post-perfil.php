<?php do {?>
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 imagem-usuario"><img
                                    class="rounded-circle" src="<?php echo($icones.$row_rs_post['fotoPerfil'])?>" alt="<?php echo $row_rs_post['fotoPerfil']?>" width="44px"></div>
							<div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-7 <?php if($row_rs_post['fotoPerfil'] == "aluno.png" || $row_rs_post['fotoPerfil'] == "aluna.png") {
						echo("nome-usuario-2"); 
							}
						  else { 
							  echo("nome-usuario"); 
						  			} ?>"><a href="perfil.php?idUsuario=<?php echo($row_rs_post['idUsuario']);?>"><?php echo($row_rs_post['nome'])?></a></div>
					
                           

                            <a href="post.php?idPost=<?php echo($row_rs_post['idPost'])?>" class="link-post" id="link_post" title="<?php echo($row_rs_post['titulo'])?>">
								<h3 class="card-text col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 titulo">● <?php echo($row_rs_post['titulo'])?></h2>
								<p class="card-text col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><?php echo($row_rs_post['descricao'])?></p>
                                 <div class="col-xl-12"><img class="imagens card img-fluid" src="imagens/imagens-p/<?php echo($row_rs_post['fotoThumb'])?>" alt="<?php echo($row_rs_post['fotoThumb'])?>"></div>
                                <div class="col-xl-12 col-lg-12 hidden">●</div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 font-center"><a href="vote.php?idPost=<?php echo($row_rs_post['idPost'])?>"><img src="imagens/vote.png" width="25" height="25" title="Vote"></a></div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 font-center"><a href="#"><img src="imagens/senac-logo-0 shareicon.png" title="Compartilhar" alt="Compartilhar" width="25" height="20"></a></div><hr>    
                        		
						 	</a>
							<?php } while($row_rs_post = mysqli_fetch_assoc($rs_post));?>