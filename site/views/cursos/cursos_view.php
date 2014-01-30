<div id="pagina-interna">
		<div class="internaCtrl">
            <div class="titulo">   
              Coleções <img class="divisao" src="<?php echo base_url(); ?>public/imagem/layout/menu-footer-separador.png" /> <?php echo $descricao->titulo; ?>
            </div>
  
            <div class="tabela">
              	<div class="listCategory">
              		<?php foreach($modelo as $m){ ?> 
                       <a class="menu-produtos-interno" href="<?php echo base_url('index.php/colecao/produto/'.$m->id_modelo)?>"><?php echo $m->titulo;  ?></a><br />
                    <?php } ?>
              </div>
              <ul class="produtos-total">
				<?php foreach($produto as $p){?>
                  <li class="produto-interno">
                    <a class="box-expandir" href="<?php echo base_url().$p->imagem; ?>">
                     <img class="borda" src="<?php echo image_url($p->imagem,'183x220');?>">
                    </a>
                  </li>
                <?php } ?>
              </ul>
            </div>
        </div>
            <!-- /foto produto --> 
</div>

<script>var url = '<?php echo base_url()?>'; </script>
 <script type="text/javascript" src="<?php echo base_url()?>public/util/box/jquery.lightbox-0.5.js"></script>
     <script type="text/javascript">
    $(function() {
		$('.box-expandir').lightBox();
    });
    </script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/util/box/jquery.lightbox-0.5.css" media="screen" />