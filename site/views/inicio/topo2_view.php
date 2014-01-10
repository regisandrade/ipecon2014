<?php 
$config = $this->db->get('configuracao')->result();
$config = isset($config[0])?$config[0]:0;
?>
<div id="header-interno">
   <div class="centro">
   <div id="header-logomarca-menu">
     <div id="header-logomarca-menu-conteudo">
     
     <!-- lOGO -->
            <div class="logo-marca">
              <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/imagem/layout/logo.fw.png"></a>             
           </div>
       <!-- /lOGO -->
       <!-- Menu -->    
        <div class="menu-principal">
         <div class="menu">
           <a href="<?php echo base_url(); ?>">Home</a>
           <a href="<?php echo base_url()?>index.php/empresa">Lia Kurtz</a>
           <a href="<?php echo base_url()?>index.php/colecao">Coleção</a>
           <a href="<?php echo base_url()?>index.php/noticia">Notícias</a>
           <a href="<?php echo base_url()?>index.php/contato">Contato</a>
         </div>
         
         <div class="redes">
         
         <a href="<?php echo $config->facebook ?>" target="_blank"><img class="fc" src="<?php echo base_url()?>public/imagem/layout/facebook.fw.png"></a>
         <img class="sp" src="<?php echo base_url()?>public/imagem/layout/menu-separador.fw.png">
         <a href="<?php echo $config->instagram ?>" target="_blank"><img class="ex" src="<?php echo base_url()?>public/imagem/layout/extra.fw.png"></a>
         
         </div>
      </div>
    
    <!-- /Menu -->
    </div>
   <!-- /header-logomarca-menu -->
   </div>
   <!-- /header-logomarca-menu-conteudo -->
   </div>
</div>   