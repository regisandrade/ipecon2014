<div class="conteiner">

<ul class="breadcrumb">
  <li><a href="<?php echo base_admin()?>">Home</a> <span class="divider">/</span></li>
  <li><a href="<?php echo base_admin('servidor/listar')?>">Servidores</a> <span class="divider">/</span></li>
  <li class="active">ContraCheques</li>
</ul>

Selecione o arquivo historicosFinanceiros.xml.
<form action="<?php echo base_admin('servidor/atualizar_historico_financeiro')?>" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" class="btn btn-success" value="Enviar arquivo" />
</form>

</div>
