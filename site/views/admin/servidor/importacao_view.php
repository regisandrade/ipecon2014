<div class="conteiner">

<ul class="breadcrumb">
  <li><a href="<?php echo base_admin()?>">Home</a> <span class="divider">/</span></li>
  <li><a href="<?php echo base_admin('servidor/listar')?>">Servidores</a> <span class="divider">/</span></li>
  <li class="active">Importação</li>
</ul>

Selecione o arquivo .xml de servidores.
<form action="<?php echo base_admin('servidor/atualizar_servidores')?>" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" class="btn btn-success" value="Enviar arquivo" />
</form>

Selecione o arquivo .xml de dependentes.
<form action="<?php echo base_admin('servidor/atualizar_dependentes')?>" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" class="btn btn-success" value="Enviar arquivo" />
</form>
</div>
