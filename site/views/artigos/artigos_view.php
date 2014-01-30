<div id="pagina-interna">
  <div class="internaCtrl">
    <div class="titulo">Artigos</div>
    <?php foreach($artigos as $e) { ?>
      <div class="texto">
        <?php echo $e->texto; ?>
      </div>
    <?php } ?>
  </div>
</div>