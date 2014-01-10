<?php
  $banner = $this->db->get("banners")->result();	  
?>

<!-- BEGIN BANNER -->
<!-- Banner de imagem -->
<div id="banner_imagem_fundo">
 <ul>
 <?php   foreach($banner as $b){?>
    <li style="width:100%;margin:0px auto !important;">
     <a href='<?php echo $b->link ?>' style="z-index:10;" >
          <img style="width:100%" align="middle" height="410px" src='<?php echo image_url($b->imagem,'1300x410')?>' />
     </a>
    </li>
  <?php }?>  
 </ul>
</div>

</div>

