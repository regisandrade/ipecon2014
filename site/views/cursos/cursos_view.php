<div id="pagina-interna">
  <div class="internaCtrl">
    <div class="titulo" style="margin:0 0 60px 0;">Cursos</div>
    <div class="texto">
    <?php foreach($cursos as $e) { 
    	echo $e->Nome."<br>"; 
	} ?>
    </div>
  </div>
</div>