<div class="left-sidebar">
                <a href="index.php"><img class="leftside-image" src="imagens/senac-logo-0.png" alt="Senac.logo" width="170px"></a>
                <p class="font-sub">Chat rede social de <span style="color: #FFAD5A;">aluno</span> para <span style="color: #FFAD5A;">aluno</span></p>
                <ul class="list-nav">
                    <li><a href="" class="left-sidebar hover">Notificações</a></li>
                    <br>
                    <li><a href="" class="left-sidebar hover">Mensagens</a></li>
                    <br>
                    <li><a href="#" class="left-sidebar hover">Configurações</a></li>
					<br>
                    <li><a href="#" class="left-sidebar hover">Perfil</a></li>
					
                    <br>
                </ul></div>
			<!-- Button to Open the Modal -->
<button type="button" class="btn button-publi" data-toggle="modal" data-target="#myModal">
  Publicar
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Publicar postagem</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
		<div class="modal-body">
			<div class="row">
      <div class="col-xl-2"></div>
        <div class="col-xl-1 imagem-usuario"><img class="rounded-circle" src="<?php echo($icones.$row_rs_post['fotoPerfil']) ?>" alt="" width="44px"></div>
		  <div class="col-xl-9 <?php if($row_rs_post['fotoPerfil'] == "aluno.png" || $row_rs_post['fotoPerfil'] == "aluna.png") {
						echo("nome-usuario-2"); 
							}
						  else { 
							  echo("nome-usuario"); 
						  } ?>"><?php echo($row_rs_post['nome'])?></div>
				
      
			<form method="post" enctype="multipart/form-data">
				<hr>

				<div class="col-xl-12" style="text-align: center">
					<select name="categoria" id="categoria">
					<?php do {?>
						<option value="<?php echo($row_rs_categoria['idCategoria'])?>"><?php echo($row_rs_categoria['categoria'])?></option>
						<?php } while($row_rs_categoria = mysqli_fetch_assoc($rs_categoria)); ?>
					</select>
				</div>
				<br>
				<div class="col-xl-12">
					<input size="57" name="titulo" type="text" id="titulo" placeholder="Título" maxlength="50" required="required">
				</div>	
				<br>
				<div style="padding-left: 2px">
					<textarea name="descricao" cols="64" rows="8" maxlength="320" id="descricao" placeholder="Descrição" required="required"></textarea>
				</div>
				<br>
				<br>
				<div class="col-xl-12" style="text-align: center">
					<input size="57" name="videos" type="text" id="videos" placeholder="URL do Video" maxlength="50">
					<p style="text-align: center; font-size: 14px;">PS: Coloque somente URL do Youtube.</p>
				</div>
				<div class="col-xl-12" style="text-align: center">
					<br>
				<select name="imagem" id="imagem">
				<?php do {?>
				<option value="<?php echo($row_rs_imagem['idImagem'])?>"><?php echo($row_rs_imagem['fotoThumb'])?></option>
					<?php } while($row_rs_imagem = mysqli_fetch_assoc($rs_imagem));?>
				</select>
					
				</div>
				
				
			</div>
</div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="button-submit">
      </div>
</form>
    </div>
  </div>
</div>
                <br>
<div class="left-sidebar">
				<br> 
				<pre>
                <div class="font-info">Site desenvolvido com o propósito de servir
como projeto integrador do grupo 1 da turma
TI34 do SENAC Lapa Tito. Sem quaisquer
intenção de ferir ou manchar a imagem da
instituíção.</div>
</pre></div>

