<div id="pagina-interna">
	<div class="internaCtrl">
		<div class="titulo">Nossas Fotos</div>
		<div class="fotos">
			<ul>
				<?php foreach($galerias as $g) { ?>
				<li><?php echo $g->titulo; ?>&nbsp;<a href="<?php echo base_url('index.php').'/fotos/verGaleria/'.$g->id_galeria?>"><img src="<?php echo base_url()?>public/imagem/layout/camera.png"></a></li>
				<?php } ?>
			</ul>				
		</div>		
	</div>
</div>