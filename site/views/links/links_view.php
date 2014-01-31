<div id="pagina-interna">
	<div class="internaCtrl">
		<div class="titulo" style="margin:0 0 60px 0;">Links</div>
			<div class="texto">
				<ul>
				<?php foreach($links as $e) { 
					echo "<li><a href=\"http://".$e->Link."\" target=\"_blank\">".$e->Descricao."</a></li>"; 
				} ?>
				</ul>
			</div>
		</div>
	</div>
</div>