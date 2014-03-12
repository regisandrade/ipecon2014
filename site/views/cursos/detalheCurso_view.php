<div class="titulo"><?php echo $curso->Nome?></div>
<div class="divInscricao"><a href="<?php echo base_url('index.php').'/inscricao/preInscricao/'.$this->uri->segment(3)?>" class="btn btn-warning"><i class="icon-align-justify"></i>&nbsp;Realizar pré-inscrição</a></div>
<div class="detalheCurso">
	<label>Apresentação</label>
	<span><?php echo $curso->apresentacao ?></span>
	<label>Público Alvo</label>
	<span><?php echo $curso->publico; ?></span>
	<label>Datas Importante</label>
	<span><?php echo $curso->datas; ?></span>
	<label>Documentos para Inscrição</label>
	<span><?php echo $curso->inscricao; ?></span>
	<label>Avaliação</label>
	<span><?php echo $curso->avaliacao; ?></span>
	<label>Disciplinas</label>
	<span><?php echo $curso->disciplinas; ?></span>
	<label>Metodologia</label>
	<span><?php echo $curso->metodologia; ?></span>
	<label>Certificados</label>
	<span><?php echo $curso->certificados; ?></span>
	<label>Duração do Curso</label>
	<span><?php echo $curso->duracao ?></span>
	<label>Número de Vagas</label>
	<span><?php echo $curso->numeroVagas; ?></span>
	<label>Coordenação Geral</label>
	<span><?php echo $curso->coordenacaogeral; ?></span>
	<?php
     if (!empty($curso->coordenacaoacademica)) {
     ?>
          <label>Coordenação Acadêmica</label>
          <span><?php echo $curso->coordenacaoacademica; ?></span>
     <?php
     }
     ?>               
	<label>Horário das Aulas</label>
	<span><?php echo $curso->horario; ?></span>
	<label>Processo Seletivo</label>
	<span><?php echo $curso->processo; ?></span>
	<label>Corpo Docente</label>
	<span><?php echo $curso->corpoDocente; ?></span>
	<!--<label>Informações</label>
	<span><?php echo $curso->informacoes; ?></span>-->
</div>