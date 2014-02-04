<div id="pagina-interna">
     <div class="internaCtrl">
          <div class="titulo">Cursos</div>
          <div class="texto">
          <?php foreach($cursos as $e) {
               echo "<a href=\"".base_url('index.php').'/cursos/getCurso/'.$e->Codg_Curso."\">".$e->Nome."</a><br><br>";
          } ?>
          </div>
     </div>
</div>