<div id="pagina-interna">
    <div class="internaCtrl">
        <div class="titulo">Professores</div>
        <div class="texto">
            <ul>
            <?php foreach($professores as $e) {
                echo "<li>".$e->Nome."</li>";
            } ?>
            </ul>
        </div>
    </div>
</div>