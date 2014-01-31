<div id="pagina-interna">
	<div class="internaCtrl">
		<div class="titulo">Artigos</div>
		<div class="texto">
			<ul>
			<?php foreach($artigos as $e) {
				echo "<li>".$e->Descricao."</li>";
			} ?>
			</ul>
		</div>
	</div>
</div>