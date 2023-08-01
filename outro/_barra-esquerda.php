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
        <div class="col-xl-1 imagem-usuario"><img class="rounded-circle" src="<?php echo($icones.$row_rs_post['fotoPerfil']) ?>" alt="" width="44px"></div><div class="col-xl-8 <?php if($row_rs_post['fotoPerfil'] == "aluno.png" || $row_rs_post['fotoPerfil'] == "aluna.png") {
						echo("nome-usuario-2"); 
							}
						  else { 
							  echo("nome-usuario"); 
						  			} ?>"><?php echo($row_rs_post['nome'])?></div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

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

