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
  <div id="cursos">&nbsp;</div>
  <!-- cursos -->

  <!-- login-noticias-facebook -->
  <div id="login-noticias-facebook">
    <div id="conteudo-login-noticias-facebook">
      <div id="conteudo-login"><strong>PORTAL DO ALUNO</strong>
        <!-- Formulario login -->
        <form id="form1" name="form1" method="post" action="" class="form-horizontal">
          <div class="control-group">
            <div class="controls">
              <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input class="span2" name="login" id="inputIcon" type="text" placeholder="Seu e-Mail">
              </div>
            </div>
            <div class="controls">
              <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span>
                <input class="span2" name="senha" id="inputIcon" type="password" placeholder="Sua senha">
              </div>
            </div>
            <div class="controls">
              <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
          </div>
        </form>
        <!-- /Formulario login -->
      </div>
      <div id="conteudo-noticia">
        <span><img src="<?php echo base_url(); ?>public/imagem/layout/icon-noticias.png" />Notícias</span>
        <?php
        foreach ($noticias as $noticia) {
          echo '<div class="tituloNoticia">'.$noticia->titulo.'</div><div class="setaNoticia"></div>';
        }
        ?>
      </div>
      <div id="conteudo-facebook">
        <div class="fb-like-box" data-href="https://www.facebook.com/pages/Ipecon/277205629045834?fref=ts" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
      </div>
    </div>
  </div>
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