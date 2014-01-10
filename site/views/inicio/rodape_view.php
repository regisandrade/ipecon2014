<?php 
$config = $this->db->get('configuracao')->result();
$config = isset($config[0])?$config[0]:0;
?>
  <!-- footer -->
  
  <div id="footer">
       <div class="internaCtrl">
       <!-- mene -->
        <div id="menu-footer">
            <div class="menu-footer">
             <a href="<?php echo base_url(); ?>">Home</a>
             <a href="<?php echo base_url()?>index.php/empresa">Lia Kurtz</a>
             <a href="<?php echo base_url()?>index.php/colecao">Coleção</a>
             <a href="<?php echo base_url()?>index.php/noticia">Notícias</a>
             <a href="<?php echo base_url()?>index.php/contato">Contato</a>
            </div>

        </div>
        
        <div class="redes-footer">
        <a href="<?php echo $config->facebook ?>" target="_blank"><img class="fc" src="<?php echo base_url()?>public/imagem/layout/facebook.fw.png"></a>
         <img class="sp" src="<?php echo base_url()?>public/imagem/layout/menu-separador.fw.png">
         <a href="<?php echo $config->instagram ?>" target="_blank"><img class="ex" src="<?php echo base_url()?>public/imagem/layout/extra.fw.png"></a>
        </div>
       <!-- /menu -->
       
       <div id="objeto">
            <a href="http://objetocomunicacao.com/" target="_blank"><img class="img-objeto" src="<?php echo base_url()?>public/imagem/layout/objeto.png"></a>
            <p class="des-objeto">Copyright © 2013 Lia Kurtz</p>
       </div>
       </div>
  </div>
  
  <!-- /footer -->