<?php
echo isset($error)?"<div id='box3'>{$error}</div>":"";
?>
<form name="form1" id="validar_formulario" method="post" action="">
<input name="us_id" type="hidden" value="<?php echo $dados['us_id']?>">

<div class="buttons">
  <b>Adicionar: Usuário</b>
  <button onclick="aplicar()" class="btn btn-primary" type="button"><i class="icon-check icon-white"></i> Aplicar</button>
  <button class="btn btn-primary" type="submit"><i class="icon-check icon-white"></i> Salvar</button>
  <a class="btn" href="<?php echo base_admin('usuarios/listar_usuarios')?>"><i class="icon-remove-circle"></i> Fechar</a>
</div>

<div class="content">
  <table width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr>
      <td>Nome:</td>
      <td><input type="text" name="us_nome" class="validate[required]" value="<?php echo $dados['us_nome']?>" maxlength="200"></td>
    </tr>
    <tr>
      <td>Cidade:</td>
      <td><input type="text" name="us_cidade" value="<?php echo $dados['us_cidade']?>" maxlength="200"></td>
    </tr>
    <tr>
      <td>Uf:</td>
      <td><input type="text" name="us_estado" value="<?php echo $dados['us_estado']?>" maxlength="2"></td>
    </tr>
    <tr>
      <td>Telefone:</td>
      <td><input type="text" name="us_telefone" value="<?php echo $dados['us_telefone']?>" maxlength="14"></td>
    </tr>
    <tr>
      <td colspan="2"><strong>Dados para acessar o painel</strong></td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><input type="text" name="us_email" value="<?php echo $dados['us_email']?>" class="validate[required,custom[email]]" maxlength="200"></td>
    </tr>
    <tr>
      <td>Senha do usuário:</td>
      <td><input type="password" id="id_senha" name="senha" <?php if($dados['us_id']==0){?>class="validate[required]"<?php }?> maxlength="200"></td>
    </tr>
    <tr>
      <td>Repetir senha do usuário:</td>
      <td><input type="password" name="senha2" <?php if($dados['us_id']==0){?>class="validate[required,equals[id_senha]]"<?php }?> maxlength="200"></td>
    </tr>
    <script type="text/javascript">
      $(function(){
        $("#us_tipo").val(<?php echo $dados['us_tipo']?>);
      });
    </script>
    <?php if(get_user()->us_tipo==1){?>
    <tr>
      <td>Função do usuário:</td>
      <td><select class="validate[required]" id="us_tipo" name="us_tipo">
            <option value="">Selecione</option>
            <option value="1">Administrador</option>
            <option value="2">Administrador de conteúdo</option>
          </select>
      </td>
    </tr>
    <?php }?>
    <script type="text/javascript">
      $(function(){
        $("#us_ativo").val(<?php echo $dados['us_ativo']?>);
      });
    </script>
    <tr>
      <td>Usuário pode logar no sistema?</td>
      <td><select class="validate[required]" id="us_ativo" name="us_ativo">
            <option value="1">Sim</option>
            <option value="0">Não</option>
          </select>
      </td>
    </tr>
    <?php if(get_user()->us_tipo==1){?>
    <tr>
      <td>Permissão do usuário:</td>
      <td>
        <?php
        $permissao = json_decode($dados['us_permissao']);
        foreach($this->config->config['modulos'] as $modulo=> $descricao){
        ?>
          <strong><?php echo $descricao?>: </strong>
          <input type="checkbox" name="us_permissao[<?php echo $modulo?>][adicionar]" <?php echo isset($permissao->{$modulo}->adicionar)?'checked':''?> value="1" /> Adicionar
          <input type="checkbox" name="us_permissao[<?php echo $modulo?>][editar]" <?php echo isset($permissao->{$modulo}->editar)?'checked':''?> value="1" /> Editar
          <input type="checkbox" name="us_permissao[<?php echo $modulo?>][remover]" <?php echo isset($permissao->{$modulo}->remover)?'checked':''?> value="1" /> Excluir<br>
        <?php }?>
      </td>
    </tr>
    <?php }?>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button onclick="aplicar()" class="btn btn-primary" type="button"><i class="icon-check icon-white"></i> Aplicar</button>
        <button class="btn btn-primary" type="submit"><i class="icon-check icon-white"></i> Salvar</button>
        <a class="btn" href="<?php echo base_admin('controle/listar')?>"><i class="icon-remove-circle"></i> Fechar</a>
      </td>
    </tr>
  </table>
</div>
</form>
<script>
  function aplicar(){
    $("#validar_formulario").attr('action','<?php echo base_admin("controle/salvar_novo".'?aplicar=sim')?>');
    $("#validar_formulario").submit();
  }
</script>