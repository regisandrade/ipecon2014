<?php

/*
-----------------VEJA UM MODELO COMPLETO-----------------

	public function <nome_do_modelo>(){
		$_SESSION['modulo'] = array();	
		$_SESSION['modulo']['modulo']  = '<nome_do_modelo>';
		$_SESSION['modulo']['table'] = '<nome_da_tabela_do_modelo>';
		$_SESSION['modulo']['pk'] = '<nome_chave_primaria>';
		$_SESSION['modulo']['anexada'] = 'produtos';
		$_SESSION['modulo']['extensao'] = array();
		$_SESSION['modulo']['pai'] = @$_GET['pai'];
		
		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] = 
		array(
		'<campo_chave_primaria>'=>array('type'=>'pk','label'=>'<label_ou_nome_campo>'),
		'<campo_imagem>'=>array('type'=>'img','label'=>'<label_ou_nome_campo>'),
		'<campo_varchar>'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'<label_ou_nome_campo>'),
		'<campo_texto_simples>'=>array('type'=>'text','label'=>'<label_ou_nome_campo>'),
		'<campo_texto_rico_ckeditor>'=>array('type'=>'text','ckeditor'=>1,'label'=>'<label_ou_nome_campo>'),
		'<campo_data>'=>array('type'=>'date','notnull'=>0,'label'=>'<label_ou_nome_campo>'),
		'<campo_chave_estrangeira>'=>array('type'=>'fk','table_fk'=>'<nome_tabela_estrangeira>','fk_id'=>'<id_tabela_estrangeira>','fk_text'=>'<campo_texto_tabela_estrangeira>','label'=>'<label_ou_nome_campo>'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}

------FIM DO EXEMPLO---------	

*/

class Modulos extends CI_Controller{
   
   public function __construct(){
	   parent::__construct();
	   $_SESSION['filtros'] = array();
	   }

	public function configuracao(){
		$_SESSION['modulo'] = array();	
		$_SESSION['modulo']['modulo']  = 'configuracao';
		$_SESSION['modulo']['table'] = 'configuracao';
		$_SESSION['modulo']['pk'] = 'id_configuracao';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();
		
		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] = 
		array(
		'id_configuracao'=>array('type'=>'pk','label'=>'N°'),
		'empresa'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'Empresa'),
		'slogan'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'Sogan'),
		'descricao'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'Descricao'),
		'email'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'E-mail'),
		'facebook'=>array('type'=>'varchar','size'=>300,'notnull'=>0,'label'=>'Facebook'),
		'instagram'=>array('type'=>'varchar','size'=>300,'notnull'=>0,'label'=>'Instagram'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}
	
	
	public function noticia(){
		$_SESSION['modulo'] = array();	
		$_SESSION['modulo']['modulo']  = 'noticia';
		$_SESSION['modulo']['table'] = 'noticia';
		$_SESSION['modulo']['pk'] = 'id_noticia';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();
		
		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] = 
		array(
		'id_noticia'=>array('type'=>'pk','label'=>'Nº'),
		'titulo'=>array('type'=>'varchar','size'=>200,'label'=>'Titulo'),
		'texto'=>array('type'=>'text','ckeditor'=>1,'label'=>'Texto'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}
	
	public function produto(){
		$_SESSION['modulo'] = array();	
		$_SESSION['modulo']['modulo']  = 'produto';
		$_SESSION['modulo']['table'] = 'produto';
		$_SESSION['modulo']['pk'] = 'id_produto';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();
		
		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] = 
		
		array(
				
		 'id_produto'=>array('type'=>'pk','label'=>'Nº'),
		 'nome'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'nome'),
		 'imagem'=>array('type'=>'img','label'=>'Imagem'),
		 'texto'=>array('type'=>'text','ckeditor'=>1,'label'=>'Texto'),
		 'modelo_produto'=>array('type'=>'fk','table_fk'=>'modelo','fk_id'=>'id_modelo','fk_text'=>'titulo','label'=>'Modelo')
		);
		
		//Instalando o modulo
		$this->install();
		//ir para controlador
		
		redirect(base_admin('controle/listar'));
	} 
	
	
	public function modelo(){
		$_SESSION['modulo'] = array();	
		$_SESSION['modulo']['modulo']  = 'modelo';
		$_SESSION['modulo']['table'] = 'modelo';
		$_SESSION['modulo']['pk'] = 'id_modelo';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();
		
		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] = 
		array(
		'id_modelo'=>array('type'=>'pk','label'=>'Nº'),
		'titulo'=>array('type'=>'varchar','size'=>200,'label'=>'Titulo'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}
	
	public function empresa(){
		$_SESSION['modulo'] = array();	
		$_SESSION['modulo']['modulo']  = 'empresa';
		$_SESSION['modulo']['table'] = 'empresa';
		$_SESSION['modulo']['pk'] = 'id_empresa';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();
		
		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] = 
		array(
		'id_empresa'=>array('type'=>'pk','label'=>'Nº'),
		'titulo'=>array('type'=>'varchar','size'=>200,'label'=>'Titulo'),
		'texto'=>array('type'=>'text','ckeditor'=>1,'label'=>'Texto'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}
	
	public function banners(){
		$_SESSION['modulo'] = array();	
		$_SESSION['modulo']['modulo']  = 'banners';
		$_SESSION['modulo']['table'] = 'banners';
		$_SESSION['modulo']['pk'] = 'id_banners';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();
		
		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] = 
		array(
		'id_banners'=>array('type'=>'pk','label'=>'Nº'),
		'imagem'=>array('type'=>'img','label'=>'Imagem'),
		'titulo'=>array('type'=>'varchar','size'=>200,'label'=>'Titulo'),
		'link'=>array('type'=>'varchar','size'=>200,'label'=>'Link'),
		);
		//Instalando o modulo
		$this->install();
		//ir para controlador
		redirect(base_admin('controle/listar'));
	}

    public function instalacao(){
		$_SESSION['modulo'] = array();	
		$_SESSION['modulo']['modulo']  = 'instalacao';
		$_SESSION['modulo']['table'] = 'instalacao';
		$_SESSION['modulo']['pk'] = 'id_instalacao';
		$_SESSION['modulo']['anexada'] = '';
		$_SESSION['modulo']['extensao'] = array();
		
		//Definindo os campos da tabela
		$_SESSION['modulo']['fields'] = 
		
		array(
				
		 'id_instalacao'=>array('type'=>'pk','label'=>'Nº'),
		 'titulo'=>array('type'=>'varchar','size'=>200,'notnull'=>0,'label'=>'Titulo'),
		 'resumo'=>array('type'=>'text','size'=>200,'label'=>'Introdução'),
		 'texto'=>array('type'=>'text','ckeditor'=>1,'label'=>'Texto'),		
		
		);
		
		//Instalando o modulo
		$this->install();
		//ir para controlador
		
		redirect(base_admin('controle/listar'));
	 }
	
	
    /*INSTALL MODULO NÃO MEXER*/
	public function install(){
		
		if(!$this->db->table_exists($_SESSION['modulo']['table'])){
			$SQL_TABLE = "CREATE TABLE ".$_SESSION['modulo']['table']."(";
			
			foreach($_SESSION['modulo']['fields'] as $field => $f){
				
				//PRIMARY KEY
				if($f['type']=='pk'){
					$SQL_TABLE .= $field." integer not null auto_increment primary key,";
					}

				//VARCHAR
				if($f['type']=='varchar'){
					$null = isset($f['notnull'])?'':' not null';
					$SQL_TABLE .= $field." varchar(".$f['size'].") {$null},";
					}				

				//VARCHAR
				if($f['type']=='img'){
					$SQL_TABLE .= $field." varchar(200),";
					}
				
				//VARCHAR
				if($f['type']=='date'){
					$null = isset($f['notnull'])?'':' not null';
					$SQL_TABLE .= $field." date $null,";
					}	

				//VARCHAR
				if($f['type']=='datetime'){
					$null = isset($f['notnull'])?'':' not null';
					$SQL_TABLE .= $field." datetime $null,";
					}	

				//VARCHAR
				if($f['type']=='fk'){
					$SQL_TABLE .= $field." integer default 0,";
					}

				//VARCHAR
				if($f['type']=='text'){
					$null = isset($f['notnull'])?'':' not null';
					$SQL_TABLE .= $field." text $null,";
					}	
				}
				
			if(isset($_SESSION['modulo']['pai'])){
				$SQL_TABLE .= "id_pai integer default 0,";
				}	
				
			$SQL_TABLE .= "ordem integer default 1,";
			$SQL_TABLE .= "insert_data datetime default '0000-00-00 00:00:00',";
			$SQL_TABLE .= "update_data datetime default '0000-00-00 00:00:00');";
			
			$this->db->query($SQL_TABLE);
			
			
			//echo "Tabela <b>".$_SESSION['modulo']['table']."</b> criada<br>";
			}else{
				//echo "Ja existe a tabela <b>".$_SESSION['modulo']['table']."</b><br>";
				}
		
		}
	
}
	
	
	
	
