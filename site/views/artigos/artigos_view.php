<div id="pagina-interna">
	<div class="internaCtrl">
		<div class="titulo" style="margin:0 0 60px 0;">Artigos</div>
		<div class="texto">
			<ul>
			<?php foreach($artigos as $e) { 
				echo "<li>".$e->Descricao."</li>"; 
			} ?>
			</ul>
		</div>
	</div>
</div>