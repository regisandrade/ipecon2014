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
  <!-- fonte -->
  <link href='http://fonts.googleapis.com/css?family=Advent+Pro' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url()?>public/css/layout.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url()?>public/imagem/layout/faf.png" rel="icon" />
  
  <link  rel="shortcut icon" href="<?php echo base_url();?>/public/imagem/layout/fivecon.png" />
    
  <script src="<?php echo base_url()?>public/script/jquery.min.js" ></script>
  <script src="<?php echo base_url()?>public/script/objeto.js" ></script>
  <script src="<?php echo base_url()?>public/script/jcarousellite_1.0.1.js"></script>
   
</head>
<body>
  
  <!-- prrodotos -->
       <?php 
	       if(isset($pagina)){
			    $this->load->view('inicio/topo2_view');
		        $this->load->view("{$pagina}_view",array('config'=>$config));
		   }else{
			    $this->load->view('inicio/topo1_view');
			    $this->load->view("inicio/meio_view");
	       }
	   ?>
       
  <!-- /prrodotos -->
  
  <!-- Começo do footer -->
    <?php $this->load->view('inicio/rodape_view');?>
  <!-- /Final do footer -->
</body>
</html>