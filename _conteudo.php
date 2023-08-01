				<?php do { ?>
				   <div class="card-body">
                        <div class="row">
                            <div class="col-xl-1 col-lg-1 col-md-1 imagem-usuario"><img class="rounded-circle" src="<?php echo($icones.$row_rs_post['fotoPerfil']) ?>" alt="" width="44px"></div>
                        <div class="col-xl-8 col-lg-8 col-md-7 <?php if($row_rs_post['fotoPerfil'] == "aluno.png" || $row_rs_post['fotoPerfil'] == "aluna.png") {
						echo("nome-usuario-2"); 
							}
						  else { 
							  echo("nome-usuario"); 
						  			} ?>"><?php echo($row_rs_post['nome'])?></div>
                            <div class="col-xl-3 col-lg-3 col-md-3 data"><?php echo($row_rs_post['dataCad'])?></div>
                            <p class="card-text col-xl-12 col-lg-12 col-md-12"><?php echo($row_rs_post['descricao'])?></p>
                                 <div class="col-xl-12"><img class="imagens card img-fluid" src="imagens/imagens-p/<?php echo($row_rs_post['fotoThumb'])?>" alt="<?php echo($row_rs_post['fotoThumb'])?>"></div>
                                <div class="col-xl-12 col-lg-12 hidden">●</div>
                                <div class="col-xl-6 col-lg-6 col-md-6 font-center"><i class="fa-sharp fa-solid fa-caret-up fa-2xl botao-vote"></i>Vote</div>
                                <div class="col-xl-6 col-lg-6 col-md-6 font-center"><img src="imagens/senac-logo-0 shareicon.png" title="Compartilhar" alt="Compartilhar" width="25" height="20"></div>     
                        </div>
                    </div>
                    <hr>
					<?php } while($row_rs_post = mysqli_fetch_assoc($rs_post)); ?>
 