<?
//=============================================//
// Propriet�rio : IPECON - Ensino e Consultoria
// Site : www.ipecon.com.br
// Autor : R�gis Rodrigues de Andrade
// P�gina : Conex�o com o Banco de Dados
//=============================================//

/* DADOS PARA BANCO DE PRODU��O */
$_host = "localhost";
$_usuario = "root";
$_senha = "123";
$_banco = "ipecon1_ipecon";
/********************************/

/* DADOS PARA BANCO DE DESENVOLVIMENTO */
/*$_host = "localhost";
$_usuario = "root";
$_senha = "";
$_banco = "ipecon";*/
/***************************************/

$_msgErroConexao = "N�o consegui conectar ao Banco de Dados IPECON. ";
$_msgErroBanco = "N�o pode selecionar Base de Dados. ";

$conexao = mysql_connect($_host, $_usuario, $_senha) or die($_msgErroConexao.mysql_error());
$result1 = mysql_select_db($_banco, $conexao) or die($_msgErroBanco.mysql_error());
?>
