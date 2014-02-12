<?php
$this->load->library('session');

$config = $this->db->get('configuracao')->result();
$config = isset($config[0])?$config[0]:0;

define("EMPRESA", $config->empresa);
define("EMAIL", $config->email);
define("FACEBOOK", $config->facebook);
define("TWITTER", $config->twitter);
define("LINKEDIN", $config->linkedin);
define("ENDERECO", $config->endereco);
define("TELEFONE_1", $config->telefone_1);
define("TELEFONE_2", $config->telefone_2);
define("LATITUDE", $config->latitude_endereco);
define("LONGITUDE", $config->longitude_endereco);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title><?php echo EMPRESA ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link href="<?php echo base_url();?>public/util/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">-->

	<meta name="author" content="Régis Andrade - regisandrade@gmail.com" />
  <meta name="description" content="<?php  echo isset($metadescricao)?$metadescricao:$config->descricao?>">
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="<?php  echo isset($title)?$config->empresa.' - '.$title:$config->empresa.' - '.$config->slogan?>" />
  <meta property="og:image" content="<?php echo base_url()?>public/imagem/layout/logotipo.jpg" />
  <meta property="og:description" content="<?php  echo isset($metadescricao)?$metadescricao:$config->descricao?>" />

  <link href="<?php echo base_url()?>public/css/layout.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url()?>public/imagem/layout/faf.png" rel="icon" />

  <link  rel="shortcut icon" href="<?php echo base_url();?>public/imagem/layout/fivecon.png" />

  <link rel="stylesheet" href="<?php echo base_url();?>public/util/bootstrap/css/bootstrap.css"/>

  <script src="<?php echo base_url()?>public/script/jquery.min.js" ></script>
  <script src="<?php echo base_url()?>public/script/jquery.validate.min.js"></script>
  <script src="<?php echo base_url()?>public/script/regras.validate.js"></script>

  <script src="<?php echo base_url()?>public/script/generica.js" ></script>


</head>
<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php
  // Topo
  $this->load->view('inicio/topo_view');
  // Meio
  if(isset($pagina)){
    $this->load->view("{$pagina}_view");
  }else{
    $this->load->view("inicio/meio_view");
  }
  // Rodape
  $this->load->view('inicio/rodape_view');
?>

 <!-- Le javascript
  ================================================== -->
  <script src="<?php echo base_url();?>public/util/bootstrap/js/bootstrap-alert.js"></script>

</body>
</html>