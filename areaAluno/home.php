<?php
session_start();
#echo "<pre>";print_r($_SESSION);echo "</pre>";
require_once('../conexao.inc.php'); //== Conexão com o Banco de Dados

// Mensagem
/*$mensagem = "<center><b>Aten��o.<br>Estamos em manuten��o para melhor atender as necessidades de voc�s.<br>Retornaremos as atividades normais no dia 14/02/2005 � segunda-feira.<br><br>D�vidas entrar em contato com IPECON.<br>ipecon@ipecon.com.br ou Telefones: (62) 214-3229 / 214-2563.</b></center>";
print($mensagem);
exit;*/

//== Consultar os dados do aluno
$comando = "SELECT Nome, e_Mail, Ano, Status FROM aluno WHERE Id_Numero = '".$_SESSION['id_numero']."' AND Ano = ".$_SESSION['ano'];
//echo $comando;
$result = mysql_query($comando) or die ("Erro na Consulta do Aluno.<br>Comando: ".$comando."<br>Erro: ".mysql_error());
$registro = mysql_fetch_array($result);

$_SESSION['statusCurso'] = $registro['Status'];

//==Consulta de Avisos
$cmd_aviso = "SELECT Codg_Aviso, Titulo, Descricao, DATE_FORMAT(Data_Cadastro,'%d/%m/%Y') AS Data FROM aviso ORDER BY Codg_Aviso DESC LIMIT 5";
$res_aviso = mysql_query($cmd_aviso);
$num_aviso = mysql_num_rows($res_aviso);

//== Dados da turma
$sql_turma = "SELECT DISTINCT
  DATE_FORMAT(T.Data_Inicial,'%d/%m/%Y') AS Data_Inicial,
  DATE_FORMAT(T.Data_Final,'%d/%m/%Y') AS Data_Final,
  C.Codg_Curso AS CodgCurso,
  C.Nome AS NomeCurso
FROM
  turma T
INNER JOIN curso C ON C.Codg_Curso = T.Curso
WHERE
  T.Turma = '".$_SESSION['turma']."'";

$res_turma = mysql_query($sql_turma);
$dados = mysql_fetch_array($res_turma);

$_SESSION['curso'] = $dados['CodgCurso'];
$_SESSION['nomeCurso'] = $dados['NomeCurso'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR" xml:lang="pt-BR">
<head>
    <meta http-equiv="Content-Language" content="pt-BR" />
    <meta http-equiv="Content-Type" CONTENT="text/html; charset=ISO-8859-1" />
    <meta name="target_country" content="br" />
    <meta name="country" content="Brazil" />
    <meta name="copyright" content="Ipecon Ensino e Consultoria - ipecon@ipecon.com.br - regisandrade@gmail.com" />
    <meta name="description" content="IPECON P�s-Gradua��o - Goi�nia,GO,Goi�s - MBA em Gest�o e An�lise Organizacional - MBA em Auditoria e Gest�o de Tributos - MBA em Auditoria e Gest�o de Governamental - MBA em Gerenciamento de Projetos - MBA em Per�cia" />
    <meta name="keywords" content="Goi�s, Goi�nia, Brasil, cursos, pos-gradua��o, controladoria, finan�as, pessoa, marketing, matem�tica, pericia judicial, pericia, judicial, gest�o governamental" />

    <title>IPECON P�s-Gradua��o - Goi�nia - MBA em Gest�o, An�lise, Auditoria, Projetos, Per�cia Judicial</title>

    <link rel="stylesheet" href="../css/ipecon.css" type="text/css" />

    <script type="text/javascript" src="js/areaAluno.js"></script>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-157037-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>
<body>
<div id="geral">
    <div id="menu">
	<ul>
	    <li><a href="home.php" class="menuSite">Home</a></li>
	    <li><a href="home.php?pag=10" class="menuSite">Alterar senha</a></li>
	    <li><a href="home.php?pag=13" class="menuSite">Ajuda</a></li>
	    <li><a href="http://www.ipecon.com.br" class="menuSite">Sair</a></li>
	</ul>
    </div>
    <div id="corpoAluno">

	<div id="dvEsquerdaAluno">
		<ul>
			<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=1'?>" class="menuAluno">Material dispon�vel</a></li>
			<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=2'?>" class="menuAluno">Artigos</a></li>
			<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=3'?>" class="menuAluno">Cronograma</a></li>
			<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=4'?>" class="menuAluno">Notas/Frequ�ncias</a></li>
			<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=5'?>" class="menuAluno">Professores</a></li>
			<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=6'?>" class="menuAluno">Depoimento</a></li>
			<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=7'?>" class="menuAluno">Declara��es</a></li>
			<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=8'?>" class="menuAluno">Links</a></li>
			<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=9'?>" class="menuAluno">Atualizar dados cadastrais</a></li>
			<?php
			if(date('Ymd') >= '20130401'){
			?>
				<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=14'?>" class="menuAluno">Atualizar curr�culo</a></li>
				<li><a href="<?php echo $_SESSION['statusCurso'] == 0 ? '#' : 'home.php?pag=15'?>" class="menuAluno">Vagas anunciada</a></li>
			<?php
			}
			?>
	    </ul>
	</div>

	<div id="dvDireitaAluno">
	    <!-- AQUI VAI FICAR O CURSO DE DESTAQUE, CURSOS E NOTICIAS -->
	    <?php
	    if(!empty($_REQUEST['pag'])){
		switch($_REQUEST['pag']){
		    case 1:
			$_pagina = "exercicios/exercicio.php";
			break;
		    case 11:
			$_pagina = "exercicios/resultado.php";
			break;
		    case 12:
			$_pagina = "exercicios/resultado_aterior.php";
			break;
		    case 2:
			$_pagina = "artigos/artigos.php";
			break;
		    case 3:
			$_pagina = "cronograma/cronograma.php";
			break;
		    case 4:
			$_pagina = "notas/resultado.php";
			break;
		    case 5:
			$_pagina = "curriculo/index.php";
			break;
		    case 6:
			$_pagina = "depoimento/index.php";
			break;
		    case 7:
			$_pagina = "declaracoes/declaracao.php";
			break;
		    case 8:
			$_pagina = "links/links.php";
			break;
		    case 9:
			$_pagina = "alterar_cadastro/alterar_cadastro.php";
			break;
		    case 10:
			$_pagina = "senha/alterar_senha.php";
			break;
		    case 13:
			$_pagina = "ajuda/index.php";
			break;
		    case 14:
			$_pagina = "../admin/bcoOportunidade/bcoCurriculo/cadCurriculoAluno.php";
			break;
		    case 15:
			$_pagina = "../admin/bcoOportunidade/bcoVaga/listVagasAluno.php";
			break;
		}
	    }else {
		$_pagina = "principal.php";
	    }
	    include_once($_pagina);
	    ?>
	</div>
    </div>
    <div id="rodape">
	<p>Av. T-4, n� 1.478, Ed. Absolut Business Style, sala A-132 (13� andar)<br/>Setor Bueno, Goi�nia/GO - CEP: 74.230-030<br/>
	Telefones: (62) 3214-2563, 3214-3229<br/>
	e-mail: <a href="mailto:ipecon@ipecon.com.br">ipecon@ipecon.com.br</a></p>
    </div>
</div>
</body>
</html>
<?php //$conexao->desconectar(); ?>
