<div id="pagina-interna">
     <div class="internaCtrl">
          <div class="titulo">Cursos</div>
          <div class="cursos">
          	<ul>
				<?php foreach($cursos as $e) {
					echo "<li><a href=\"".base_url('index.php').'/cursos/getCurso/'.$e->Codg_Curso."\">".$e->Nome."</a></li>";
				} ?>
          	</ul>
          </div>
     </div>
</div>