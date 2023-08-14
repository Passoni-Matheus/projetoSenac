<table width="100%" border="1">
<tbody>
  <tr></tr>
</tbody>
<tbody>
  <tr>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Titulo</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col">Descrição</th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Video</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Imagem</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Categoria</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Evento</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Ativo</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Usuário</strong></th>
    <th align="center" valign="middle" nowrap="nowrap" bgcolor="#F7D1A1" style="color: #000000" scope="col"><strong>Desativar/Ativar post</strong></th>
  </tr>
	
  <?php do{ ?>
	<tr>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['titulo'])?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['descricao'])?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['video'])?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['fotoThumb'])?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['categoria'])?></td>
    <td align="center" valign="middle"><?php if($row_rs_usuarios['evento'] == 0 ){echo("Não é evento.");} else {echo("É evento.");}?></td>
    <td align="center" valign="middle"><?php if($row_rs_usuarios['ativo'] == 0 ){echo("Post desativo");} else {echo("Post ativo.");}?></td>
    <td align="center" valign="middle"><?php echo($row_rs_usuarios['nome'])?></td>
    <td align="center" valign="middle"><a href="suspender.php?idUsuario=<?php echo($row_rs_usuarios['idUsuario'])?>" onClick="return confirm('Deseja mesmo suspender essa conta?')">??</a></td>
	  
  </tr>
 <?php } while($row_rs_usuarios = mysqli_fetch_assoc($rs_usuarios)); ?>
</tbody>
<tbody>
</tbody>
</table>