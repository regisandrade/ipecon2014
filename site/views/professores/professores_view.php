<div id="pagina-interna">
  <div class="internaCtrl">
    <div class="titulo">Professores</div>
    <?php foreach($professores as $e) { ?>
      <div class="texto">
        <?php echo $e->texto; ?>
      </div>
    <?php } ?>
  </div>
</div>