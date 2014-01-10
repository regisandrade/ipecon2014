<?php 
  $colecao = $this->db->order_by("id_produto","desc")
                      ->limit(3)
					  ->get('produto',3)
					  ->result();
  
  $noticias = $this->db->order_by("id_noticia","desc")
                       ->limit(3)
					   ->get('noticia')
					   ->result(); 				                      
?>
<div id="conteudo-produtos">
      <div id="tudo-produto">
      
        <div id="produtos-colecao">
              
            <h1 class="colecao">Coleções</h1>
                <a href="<?php echo base_url()?>index.php/colecao"><img class="mais_mais" src="<?php echo base_url()?>public/imagem/layout/mais.png"></a>
            <!-- foto produto -->
          <div id="box-produto">
              <?php foreach($colecao as $c) { ?>
              <div class="produto">
                <a class="box-expandir" href="<?php echo base_url().$c->imagem; ?>">
                  <img class="borda" src="<?php echo image_url($c->imagem,'183x220');?>">
                </a>
              </div>
              <?php } ?>
            </div>
            <!-- /foto produto --> 
        </div>
        
        <div id="noticias">
            <h1 class="titulo-noticia">Notícias</h1>
            <?php foreach($noticias as $n){?>
            <div class="titulo-noticia-meio"><?php echo $n->titulo; ?></div>
            <div class="link-noticia">
              <a href="<?php echo base_url('index.php/noticia/descricao_noticia/'.$n->id_noticia)?>"><?php echo texto($n->texto,'60',"...") ?></a>
            </div>
            <?php } ?>
             
        </div>
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