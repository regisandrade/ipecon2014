<div id="pagina-interna">
  <div class="internaCtrl">
    <div class="titulo" style="margin:0 0 60px 0;">Professores</div>
    	<div class="texto">
    		<ul>
			<?php foreach($professores as $e) { 
				echo "<li>".$e->Nome."</li>"; 
			} ?>
    		</ul>
    	</div>
	</div>
</div>