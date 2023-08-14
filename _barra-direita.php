
	<h3 class="fonte-zero">Diversos</h3>
<div class="container right-sidebar">
                <div class="card-body">
					<section>
						<h4 class="fonte-zero">Usuário logado - Perfil</h4>
                    	<div class="d-none d-md-block" style="text-align: center;"><?php echo($row_rs_logado['nome'])?>
                        	<i class="fas fa-user"></i>
                    	</div>
					</section>
                    <br>
                    <h4 class="d-none d-md-block" style="text-align: center;">Eventos</h4>
                    <?php do {?>
					<section>
						<h5 class="fonte-zero"><?php echo($row_rs_evento['titulo'])?></h5>
					<div class="card evento d-none d-md-block">	
                        <img src="imagens/imagens-p/<?php echo($row_rs_evento['fotoThumb'])?>"><br>
                        <div class="evento-titulo"><b><?php echo($row_rs_evento['titulo'])?></b></div>
                        <div><?php echo($row_rs_evento['descricao'])?></div>
						<br>
                    </div>
					</section>
					<?php } while($row_rs_evento = mysqli_fetch_assoc($rs_evento)); ?>

                    