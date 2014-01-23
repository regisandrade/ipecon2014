<?php
$config = $this->db->get('configuracao')->result();
$config = isset($config[0])?$config[0]:0;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title><?php echo isset($title)?$config->empresa.' / '.$title:$config->empresa.' - '.$config->slogan?></title>
	<meta name="author" content="Ronildo Souza/Objeto Comunicação" />
  <meta name="description" content="<?php  echo isset($metadescricao)?$metadescricao:$config->descricao?>">
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="<?php  echo isset($title)?$config->empresa.' - '.$title:$config->empresa.' - '.$config->slogan?>" />
  <meta property="og:image" content="<?php echo base_url()?>public/imagem/layout/logotipo.jpg" />
  <meta property="og:description" content="<?php  echo isset($metadescricao)?$metadescricao:$config->descricao?>" />

  <link href="<?php echo base_url()?>public/css/layout.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url()?>public/imagem/layout/faf.png" rel="icon" />

  <link  rel="shortcut icon" href="<?php echo base_url();?>/public/imagem/layout/fivecon.png" />

  <script src="<?php echo base_url()?>public/script/jquery.min.js" ></script>
  <script src="<?php echo base_url()?>public/script/objeto.js" ></script>
  <script src="<?php echo base_url()?>public/script/jcarousellite_1.0.1.js"></script>

</head>
<body>
<?php
  // Topo
  $this->load->view('inicio/topo_view');
  // Meio
  $this->load->view("inicio/meio_view");
  // Rodape
  $this->load->view('inicio/rodape_view');
?>
</body>
</html>