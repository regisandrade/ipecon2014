<div id="pagina-interna">
  <div class="internaCtrl">
    <div class="titulo">Depoimentos</div>
    <?php foreach($depoimentos as $e) { ?>
      <div class="texto">
        <?php echo $e->texto; ?>
      </div>
    <?php } ?>
  </div>
</div>