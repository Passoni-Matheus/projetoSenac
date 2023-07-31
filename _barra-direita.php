<div class="container right-sidebar">
                <div class="card-body">
                    <div style="text-align: center;">Perfil
                        <i class="fas fa-user"></i>
                    </div>
                    <br>
                    <h3 style="text-align: center;">Eventos</h3>
                    <?php do {?>
					<div class="card evento">	
                        <img src="imagens/imagens-p/<?php echo($row_rs_evento['fotoThumb'])?>"><br>
                        <div class="evento-titulo"><b><?php echo($row_rs_evento['titulo'])?></b></div>
                        <div><?php echo($row_rs_evento['descricao'])?></div>
						<br>
                    </div>
					<?php } while($row_rs_evento = mysqli_fetch_assoc($rs_evento)); ?>
                    