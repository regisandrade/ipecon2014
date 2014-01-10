<?php 
echo isset($error)?"<div id='box3'>{$error}</div>":"";

?>

<div id="box"><strong>CADASTRO DE USUÁRIOS</strong></div>


<form name="form1" id="validar_formulario" method="post" action="">

<div id="box">
  <strong>Dados do usuário</strong>
   
   <input name="us_id" type="hidden" value="<?php echo $dados['us_id']?>">
   
    <div id="box2">
      NOME:<br />
      <input type="text" name="us_nome" class="validate[required]" value="<?php echo $dados['us_nome']?>" size="60" maxlength="200">
    </div>
  
    <div id="box2">
      UF:<br />
      <input type="text" name="us_estado" size="2" value="<?php echo $dados['us_estado']?>" maxlength="2">
    </div>
 
     <div id="box2">
      CIDADE:<br />
      <input type="text" name="us_cidade" size="60" value="<?php echo $dados['us_cidade']?>" maxlength="200">
    </div> 
  
     <div id="box2">
      TELEFONE:<br />
      <input type="text" name="us_telefone" size="30" value="<?php echo $dados['us_telefone']?>" maxlength="14">
    </div> 
    <strong>Dados para acessar o painel</strong>
     <div id="box2">
      E-MAIL:<br />
      <input type="text" name="us_email" value="<?php echo $dados['us_email']?>" class="validate[required,custom[email]]" size="60" maxlength="200">
    </div>   

     <div id="box2">
      SENHA DO USUÁRIO:<br />
      <input type="password" id="id_senha" name="senha" <?php if($dados['us_id']==0){?>class="validate[required]"<?php }?> size="60" maxlength="200">
    </div>  
 
 
     <div id="box2">
      REPETIR SENHA DO USUÁRIO:<br />
      <input type="password" name="senha2" <?php if($dados['us_id']==0){?>class="validate[required,equals[id_senha]]"<?php }?> size="60" maxlength="200">
    </div>  
 
    <div id="box2">
    <script type="text/javascript">
    $(function(){
		$("#us_tipo").val(<?php echo $dados['us_tipo']?>);
		});
    </script>
    <?php if(get_user()->us_tipo==1){?>
      FUNÇÃO DO USUÁRIO:<br />
      <select class="validate[required]" id="us_tipo" name="us_tipo">
      <option value="">Selecione</option>
       <option value="1">Administrador</option>
       <option value="2">Administrador de conteúdo</option>
      </select>
    <?php }?>  
    </div> 
 
     <div id="box2">
    <script type="text/javascript">
    $(function(){
		$("#us_ativo").val(<?php echo $dados['us_ativo']?>);
		});
    </script>
      USUÁRIO PODE LOGAR NO SISTEMA?<br />
      <select class="validate[required]" id="us_ativo" name="us_ativo">
       <option value="1">Sim</option>
       <option value="0">Não</option>
      </select>
    </div>
 
 <?php if(get_user()->us_tipo==1){?>
   <div id="box2">
    
    <?php 
	 $permissao = json_decode($dados['us_permissao']);
	 foreach($this->config->config['modulos'] as $modulo=> $descricao){
	?>
    <div><strong><?php echo $descricao?></strong></div>
    <input type="checkbox" name="us_permissao[<?php echo $modulo?>][adicionar]" <?php echo isset($permissao->{$modulo}->adicionar)?'checked':''?> value="1" /> Adicionar
    <input type="checkbox" name="us_permissao[<?php echo $modulo?>][editar]" <?php echo isset($permissao->{$modulo}->editar)?'checked':''?> value="1" /> Editar
    <input type="checkbox" name="us_permissao[<?php echo $modulo?>][remover]" <?php echo isset($permissao->{$modulo}->remover)?'checked':''?> value="1" /> Excluir
    <?php }?>
   </div>
  <?php }?> 
    
     <div id="box2">
      <input type="submit" id="botao1" value="Salvar dados">
    <a href="<?php echo base_admin('usuarios/listar_usuarios')?>" id="botao1">Cancelar</a>
      
     </div> 
    
</div>

</form>