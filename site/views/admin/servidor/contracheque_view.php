<div class="conteiner">

<ul class="breadcrumb">
  <li><a href="<?php echo base_admin()?>">Home</a> <span class="divider">/</span></li>
  <li><a href="<?php echo base_admin('servidor/listar')?>">Servidores</a> <span class="divider">/</span></li>
  <li class="active">ContraCheques</li>
</ul>

Selecione o arquivo Cadastro.txt.
<form action="<?php echo base_admin('servidor/atualizar_contracheque_servidor')?>" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" class="btn btn-success" value="Enviar arquivo" />
</form>

Selecione o arquivo Orgao.txt
<form action="<?php echo base_admin('servidor/atualizar_orgao')?>" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" class="btn btn-success" value="Enviar arquivo" />
</form>

Selecione o arquivo TipoPag.txt
<form action="<?php echo base_admin('servidor/atualizar_tipo_pagamento')?>" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" class="btn btn-success" value="Enviar arquivo" />
</form>

Selecione o arquivo Pag&lt;Mes&gt;&lt;Ano&gt;.txt
<form action="<?php echo base_admin('servidor/atualizar_pagamentos')?>" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" class="btn btn-success" value="Enviar arquivo" />
</form>



Selecione o arquivo Verbas.txt
<form action="<?php echo base_admin('servidor/atualizar_verbas')?>" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" class="btn btn-success" value="Enviar arquivo" />
</form>

</div>
