<div id="pagina-interna">
	<div class="internaCtrl">
        <?php foreach($empresa as $e) { ?>
        <div class="titulo" style="margin:0 0 60px 0;">
             <?php echo  $e->titulo; ?>
        </div>

        <div class="texto">
             <?php echo imagensLightBox($e->texto); ?>
        </div>
        <?php } ?>
     </div>
</div>

<script>var url = '<?php echo base_url()?>'; </script>
 <script type="text/javascript" src="<?php echo base_url()?>public/util/box/jquery.lightbox-0.5.js"></script>
     <script type="text/javascript">
    $(function() {
		$('.box-expandir').lightBox();
    });
    </script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/util/box/jquery.lightbox-0.5.css" media="screen" />