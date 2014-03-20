<?php
/**
*
*  CONSULTA DE ARTIGOS
*  @autor Regis Andrade
*
*/

$artigoDAO = new Artigo();
$listaArtigos = $artigoDAO->pesquisar($bd);
?>
<h2>Artigos</h2>
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>Descrição</th>
      <th>Data</th>
    </tr>
  </thead>

  <tbody>
    <?php if(!is_array($listaArtigos)){ ?>
    <tr>
      <td colspan="2" class="error">Nenhum registro encontrado.</td>
    </tr>
    <?php }else{ 
      foreach ($listaArtigos as $value) {
    ?>
    <tr>
      <td><a href="../artigos/<?php echo $value['Artigo']; ?>" target="_blank"><?php echo utf8_encode($value['Descricao']); ?></a></td>
      <td><?php echo $value['Data']; ?></td>
    </tr>
    <?php }
    } 
    ?>
  </tbody>
</table>