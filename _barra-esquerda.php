<section>
<h2 class="fonte-zero">Menu</h2>

<div class="left-sidebar">
			<section>
				<h3 class="fonte-zero">Senac Logo</h3>
                <a href="index.php"><img class="leftside-image d-none d-md-block" src="imagens/senac-logo-0.png" alt="Senac logo" width="170px"></a>
			</section>
			<section>
				<h3 class="fonte-zero">Chat rede social de aluno para aluno</h3>
                <p class="font-sub d-none d-md-block">Chat rede social de <span style="color: #FFAD5A;">aluno</span> para <span style="color: #FFAD5A;">aluno</span></p>
			</section>
                <ul class="list-nav">
			<section>
				<h3 class="fonte-zero">Notificações</h3>
                    <li><a href="#" class="d-block d-md-none" ><i class="fa-solid fa-bell" style="color: #4872ab;"></i></a>
						<a href="#" class="left-sidebar hover d-none d-md-block">Notificações</a></li>
			</section>
                    <br>
			<section>
				<h3 class="fonte-zero">Mensagens</h3>
                    <li><a href="#" class="d-block d-md-none" ><i class="fa-solid fa-comment-dots" style="color: #4872ab;"></i></a>
						<a href="" class="left-sidebar hover d-none d-md-block">Mensagens</a></li>
            </section>
					<br>
			<section>
				<h3 class="fonte-zero">Configurações</h3>
                    <li><a href="configuracoes.php" class="d-block d-md-none" ><i class="fa-solid fa-gear" style="color: #4872ab;"></i></a>
						<a href="configuracoes.php" class="left-sidebar hover d-none d-md-block">Configurações</a></li>
			</section>
					<br>
			<section>
				<h3 class="fonte-zero">Perfil</h3>
                    <li><a href="#" class="d-block d-md-none" ><i class="fa-solid fa-user" style="color: #4872ab;"></i></a>
						<a href="#" class="left-sidebar hover d-none d-md-block">Perfil</a></li>
			</section>
					<br>
			
					<li><a class="d-block d-md-none"><i class="fa-solid fa-pen-to-square" data-toggle="modal" data-target="#myModal" style="color: #f68b1f;"></i></a></li>
			
                    <br>
                </ul></div>
			<!-- Button to Open the Modal -->
			<section>
				<h3 class="fonte-zero">Botão Publicar</h3>
				<button type="button" class="btn button-publi d-none d-md-block" data-toggle="modal" data-target="#myModal">
				  Publicar
				</button>
				
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
		  <section>

        <h4 class="modal-title">Publicar postagem</h4>
		  </section>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
		
      <!-- Modal body -->
		<div class="modal-body">
			<div class="row">
      <div class="col-xl-2"></div>
		  
        <div class="col-xl-1 imagem-usuario"><img class="rounded-circle" src="<?php echo($icones.$row_rs_logado['fotoPerfil']) ?>" alt="" width="44px"></div>
		  <section>
			  <h4 class="fonte-zero">Usuário</h4>
			  <div class="col-xl-9 <?php if($row_rs_logado['fotoPerfil'] == "aluno.png" || $row_rs_logado['fotoPerfil'] == "aluna.png") {
						echo("nome-usuario-2"); 
							}
						  else { 
							  echo("nome-usuario"); 
						  } ?>"><?php echo($row_rs_logado['nome'])?></div>
		 </section>
				
      
			<form method="post" enctype="multipart/form-data">
				<hr>

				<div class="col-xl-12" style="text-align: center">
		 <section>
			 	<h4 class="fonte-zero">Categoria da publicação</h4>
					<select name="categoria" id="categoria">
					<?php do {?>
						<option value="<?php echo($row_rs_categoria['idCategoria'])?>"><?php echo($row_rs_categoria['categoria'])?></option>
						<?php } while($row_rs_categoria = mysqli_fetch_assoc($rs_categoria)); ?>
					</select>
		 </section>
				</div>
				<br>
				<div class="col-xl-12">
					<section>
					<h4 class="fonte-zero">Título da publicação</h4>
					<input class="d-none d-sm-block" size="57"  name="titulo" type="text" id="titulo" placeholder="Título" maxlength="50" required="required">
								<!--<input class="d-block d-sm-none" size="52"  name="titulo2" type="text" id="titulo2" placeholder="Título" maxlength="50" required="required">-->
					</section>
				</div>	
				<br>
				<div style="padding-left: 2px">
					<section>
					<h4 class="fonte-zero">Descrição da publicação</h4>
					<textarea class="d-none d-sm-block" name="descricao" cols="64" rows="8" maxlength="255" id="descricao" placeholder="Descrição" required="required"></textarea>
							<!--<textarea class="d-block d-sm-none" name="descricao2" cols="60" rows="8" maxlength="255" id="descricao2" placeholder="Descrição" required="required"></textarea>-->
					</section>
				</div>
				<br>
				<br>
				<div class="col-xl-12" style="text-align: center">
					<section>
					<h4 class="fonte-zero">Vídeo da publicação</h4>
					<input class="d-none d-sm-block" size="57" name="videos" type="text" id="videos" placeholder="URL do Video" maxlength="50">
						<!--<input class="d-block d-sm-none" size="52" name="videos2" type="text" id="videos2" placeholder="URL do Video" maxlength="50">-->
					<p style="text-align: center; font-size: 14px;">PS: Coloque somente URL do Youtube.</p>
					</section>
				</div>
				<div class="col-xl-12" style="text-align: center">
					<br>
				<section>
					<h4 class="fonte-zero">Imagem da publicação</h4>
				<select name="imagem" id="imagem">
				<?php do {?>
				<option value="<?php echo($row_rs_imagem['idImagem'])?>"><?php echo($row_rs_imagem['fotoThumb'])?></option>
					<?php } while($row_rs_imagem = mysqli_fetch_assoc($rs_imagem));?>
				</select>
				</section>
				</div>
				
				
			</div>
</div>
      <!-- Modal footer -->
      <div class="modal-footer">

		<h4 class="fonte-zero">Botão enviar publicação</h4>
        <input type="submit">

      </div>
</form>
		</div>
  			</div>
		</div>
	
                <br>
	</section>
<div class="left-sidebar d-none d-md-block">
				<br> 
	<section>
		<h3 class="fonte-zero">Observações finais</h3>
				<pre>
                <div class="font-info">Site desenvolvido com o propósito de servir
como projeto integrador do grupo 1 da turma
TI34 do SENAC Lapa Tito. Sem quaisquer
intenção de ferir ou manchar a imagem da
instituíção.</div>
</pre>
	</section>
		</div>
			
</section>