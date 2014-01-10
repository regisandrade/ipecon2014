<div id="box">USUÁRIOS CADASTRADOS</div>

<div id="box">
 <div id="box2">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%">Nome</td>
    <td width="23%">E-mail</td>
    <td width="18%">Telefone</td>
    <td width="19%">Função</td>
    <td width="20%">Ações</td>
  </tr>
</table>
 </div>
 
 <?php foreach($users as $u){?>
	 

  <div id="box2">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%"><?php echo $u->us_nome?></td>
    <td width="23%"><?php echo $u->us_email?></td>
    <td width="18%"><?php echo $u->us_cidade." - ".$u->us_estado?></td>
    <td width="13%"><?php echo tipo_usuario($u->us_tipo)?></td>
    <td width="26%">
    <a href="<?php echo base_admin("usuarios/form_usuario/{$u->us_id}");?>" id="botao1">&Delta; Editar</a>
   
    &nbsp;&nbsp; 
    <a href="<?php echo base_admin("usuarios/apagar_usuario/{$u->us_id}");?>" id="botao1" onclick="return confirm(\'Deseja excluir?\')">&Oslash; Remover</a>
  
    </td>
  </tr>
</table>
 </div>
 <?php }?>
 
</div>
