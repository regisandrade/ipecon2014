<?php
$config = $this->db->get('configuracao')->result();
$config = isset($config[0])?$config[0]:0;
?>
<!-- footer -->
<div id="footer">
  <span id="logo-ipecon">logo-ipecon</span>
  <span id="endereco">endereço</span>
  <span id="logo-puc">logo-puc</span>
</div>
<!-- /footer -->