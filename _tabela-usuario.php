

<table width="100%" border="1">
<tbody>
  <tr></tr>
</tbody>
<tbody>
  <tr>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Nome</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Email</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Cargo</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Estado</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Telefone</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Informações</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Genero</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Nº de Posts</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Suspenso</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Suspender</strong></th>
  </tr>
	
  <?php do{ ?>
	<tr>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['nome'])?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['email'])?></td>
    <td align="center" valign="middle"><?php if($row_rs_usuarios['posto'] == 0){echo("Aluno");} else {echo("Professor");}?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['estado'])?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['telefone'])?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['informacoes'])?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['genero'])?></td>
    <td align="center" valign="middle"><?php 
	$idUsuarioLinha = $row_rs_usuarios['idUsuario'];
	$query_rs_total = "SELECT * FROM tb_posts WHERE idUsuario = $idUsuarioLinha";
	$rs_total = mysqli_query($conn_bd_senac, $query_rs_total) or die(mysqli_error($conn_bd_senac));
	$totalRow_rs_total = mysqli_num_rows($rs_total);
		
		echo($totalRow_rs_usuarios);
		
		?></td>
    <td align="center" valign="middle"><?php if($row_rs_usuarios['suspenso'] == 0 ){echo("Não está suspenso");} else{echo("Suspenso");}?></td>
    <td align="center" valign="middle"><a href="suspender.php?idUsuario=<?php echo($row_rs_usuarios['idUsuario'])?>" onClick="return confirm('Deseja mesmo suspender essa conta?')">🔒</a></td>
	  
  </tr>
 <?php } while($row_rs_usuarios = mysqli_fetch_assoc($rs_usuarios)); ?>
</tbody>
<tbody>
</tbody>
</table>