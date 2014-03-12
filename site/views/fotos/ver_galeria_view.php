<link href="<?php echo base_url()?>public/script/jsImgSlider/themes/8/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>public/script/jsImgSlider/themes/8/js-image-slider.js" type="text/javascript"></script>

<div class="titulo">Fotos :: <?php echo $tituloGaleria->titulo?></div>
<div class="fotos">
	<div id="sliderFrame">
		<div id="slider">
			<?php
			foreach ($fotosGaleria as $f) {
				echo "<img src=\"".image_url($f->foto,'960x470')."\" alt=\"\" />";
			}
			?>
		</div>
	</div>
</div>