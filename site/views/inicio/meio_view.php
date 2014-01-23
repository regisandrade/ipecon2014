<?php
$noticias = $this->db->order_by("id_noticia","desc")
                 ->limit(3)
                 ->get('noticias')
                 ->result();
?>
<!-- conteudo -->
<div id="conteudo">

  <!-- banners -->
  <div id="banner">Banner</div>
  <!-- /banners -->

  <!-- cursos -->
  <div id="cursos">Cursos</div>
  <!-- cursos -->

  <!-- login-noticias-facebook -->
  <div id="login-noticias-facebook">Facebook</div>
  <!-- login-noticias-facebook -->

</div>
<!-- /conteudo -->

<script>var url = '<?php echo base_url()?>'; </script>
<script type="text/javascript" src="<?php echo base_url()?>public/util/box/jquery.lightbox-0.5.js"></script>
<script type="text/javascript">
  $(function() {
    $('.box-expandir').lightBox();
  });
</script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/util/box/jquery.lightbox-0.5.css" media="screen" />