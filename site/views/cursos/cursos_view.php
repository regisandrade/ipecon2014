<div id="pagina-interna">
  <div class="internaCtrl">
    <div class="titulo">Cursos</div>
    <?php foreach($cursos as $e) { ?>
      <div class="texto">
        <?php echo $e->texto; ?>
      </div>
    <?php } ?>
  </div>
</div>