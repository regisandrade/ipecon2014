<div id="pagina-interna">
	<div class="internaCtrl">
		<div class="titulo" style="margin:0 0 60px 0;">Depoimentos</div>
			<div class="texto">
			<?php foreach($depoimentos as $e) { 
				echo "<p><strong>".$e->Nome."</strong> - <i>".$e->Curso."</i><br>";
				echo $e->Depoimento."</p><br>";
			} ?>
		</div>
	</div>
</div>