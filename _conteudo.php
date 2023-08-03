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
                            <a data-toggle="modal" data-target="#post">
								<p class="card-text col-xl-12 col-lg-12 col-md-12"><?php echo($row_rs_post['descricao'])?></p>
                                 <div class="col-xl-12"><img class="imagens card img-fluid" src="imagens/imagens-p/<?php echo($row_rs_post['fotoThumb'])?>" alt="<?php echo($row_rs_post['fotoThumb'])?>"></div>
                                <div class="col-xl-12 col-lg-12 hidden">●</div>
                                <div class="col-xl-6 col-lg-6 col-md-6 font-center"><a href="#"><img src="imagens/vote.png" width="25" height="25" title="Vote"></a></div>
                                <div class="col-xl-6 col-lg-6 col-md-6 font-center"><a href="#"><img src="imagens/senac-logo-0 shareicon.png" title="Compartilhar" alt="Compartilhar" width="25" height="20"></a></div>     
                        </div>
						 	</a> 	   
                    			</div>

								<div class="modal fade" id="post">
  								<div class="modal-dialog modal-lg">
    							<div class="modal-content">

      								<!-- Modal Header -->
      							           <div class="modal-header">
        					           <h4 class="modal-title">Post de <?php echo($row_rs_post['nome']) ?></h4>
        				            <button type="button" class="close" data-dismiss="modal">&times;</button>
     				              </div>

     								 <!-- Modal body -->
      							<div class="modal-body">
      								  		<div class="row">
        <div class="col-xl-1 imagem-usuario"><img class="rounded-circle" src="<?php echo($icones.$row_rs_post['fotoPerfil']) ?>" alt="" width="58px"></div>
		  <div class="col-xl-9 nome-post <?php if($row_rs_post['fotoPerfil'] == "aluno.png" || $row_rs_post['fotoPerfil'] == "aluna.png") {
						echo("nome-usuario-2"); 
							}
						  else { 
							  echo("nome-usuario"); 
						  } ?>" style="font-size: 18px;"><?php echo($row_rs_post['nome'])?></div>
													
										<div class="col-xl-2 data-post"><?php echo($row_rs_post['dataCad'])?></div>		
    									  </div>
									</div>

     								 <!-- Modal footer -->
      								             <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                   </div>

                 </div>
               </div>
             </div>
				
                    <hr>
					<?php } while($row_rs_post = mysqli_fetch_assoc($rs_post)); ?>
 