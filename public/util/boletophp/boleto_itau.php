<?php
/*
 * PORTICULARIDADES DO SISTEMA PARA ATENDER A EMPRESA IPECON
 */
 include_once("../../../conexao.inc.php");

 $comando = "SELECT A.Nome,A.Id_Numero, E.* ,B.nossoNumero
			FROM boletos B
			INNER JOIN aluno A ON A.Id_Numero = B.idNumero
			INNER JOIN endereco E ON E.Id_Numero = B.idNumero
			WHERE
				B.idNumero = '".$_REQUEST['idNumero']."' AND B.codgCurso = ".$_REQUEST['curso'];

 /*echo "<pre>";
 print_r($_REQUEST);
 print_r($comando);
 echo "</pre>";*/
 
 $result = mysql_query($comando) or die('Erro na consulta do Boleto. '.mysql_error());
 $dados = mysql_fetch_array($result);

// +----------------------------------------------------------------------+
// | BoletoPhp - Vers�o Beta                                              |
// +----------------------------------------------------------------------+
// | Este arquivo est� dispon�vel sob a Licen�a GPL dispon�vel pela Web   |
// | em http://pt.wikipedia.org/wiki/GNU_General_Public_License           |
// | Voc� deve ter recebido uma c�pia da GNU Public License junto com     |
// | esse pacote; se n�o, escreva para:                                   |
// |                                                                      |
// | Free Software Foundation, Inc.                                       |
// | 59 Temple Place - Suite 330                                          |
// | Boston, MA 02111-1307, USA.                                          |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Originado do Projeto BBBoletoFree que tiveram colabora��es de Daniel |
// | William Schultz e Leandro Maniezo que por sua vez foi derivado do	  |
// | PHPBoleto de Jo�o Prado Maia e Pablo Martins F. Costa				  |
// | 																	  |
// | Se vc quer colaborar, nos ajude a desenvolver p/ os demais bancos :-)|
// | Acesse o site do Projeto BoletoPhp: www.boletophp.com.br             |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Equipe Coordena��o Projeto BoletoPhp: <boletophp@boletophp.com.br>   |
// | Desenvolvimento Boleto Ita�: Glauber Portella		                  |
// +----------------------------------------------------------------------+


// ------------------------- DADOS DIN�MICOS DO SEU CLIENTE PARA A GERA��O DO BOLETO (FIXO OU VIA GET) -------------------- //
// Os valores abaixo podem ser colocados manualmente ou ajustados p/ formul�rio c/ POST, GET ou de BD (MySql,Postgre,etc)	//

// DADOS DO BOLETO PARA O SEU CLIENTE
$dias_de_prazo_para_pagamento = 5;
$taxa_boleto = 0.00;
$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006";
$valor_cobrado = "200,00"; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
if($_REQUEST['idNumero'] == '00058028145'){
	$valor_cobrado = "100,00";
}
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

$dadosboleto["nosso_numero"] = $dados['nossoNumero'];  // Nosso numero - REGRA: M�ximo de 8 caracteres!
$dadosboleto["numero_documento"] = 'WEB-'.$dados['nossoNumero'];	// Num do pedido ou nosso numero
$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emiss�o do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com v�rgula e sempre com duas casas depois da virgula

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = $dados['Id_Numero'].' - '.$dados['Nome'];
$dadosboleto["endereco1"] = $dados['Endereco'].' - '.$dados['Bairro'];
$dadosboleto["endereco2"] = $dados['Cidade'].' - '.$dados['UF']." - CEP: ".$dados['CEP'];

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] = "Parab�ns pela escolha deste curso";
$dadosboleto["demonstrativo2"] = "Aguardamos a sua visita para efetiva�ao da matricula.";
$dadosboleto["demonstrativo3"] = "Em caso de d�vidas entre em contato conosco: ipecon@ipecon.com.br";
$dadosboleto["instrucoes1"] = "Em caso de d�vidas entre em contato conosco: ipecon@ipecon.com.br";
/*$dadosboleto["instrucoes2"] = "- Receber at� 10 dias ap�s o vencimento";
$dadosboleto["instrucoes3"] = "- Em caso de d�vidas entre em contato conosco: xxxx@xxxx.com.br";
$dadosboleto["instrucoes4"] = "&nbsp; Emitido pelo sistema Projeto BoletoPhp - www.boletophp.com.br";*/

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "";
$dadosboleto["valor_unitario"] = "";
$dadosboleto["aceite"] = "";
$dadosboleto["uso_banco"] = "";
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "";


// ---------------------- DADOS FIXOS DE CONFIGURA��O DO SEU BOLETO --------------- //


// DADOS DA SUA CONTA - ITA�
$dadosboleto["agencia"] = "4422"; // Num da agencia, sem digito
$dadosboleto["conta"] = "05852";	// Num da conta, sem digito
$dadosboleto["conta_dv"] = "1"; 	// Digito do Num da conta

// DADOS PERSONALIZADOS - ITA�
$dadosboleto["carteira"] = "175";  // C�digo da Carteira: pode ser 175, 174, 104, 109 ou 178

// SEUS DADOS
$dadosboleto["identificacao"] = "Ipecon - Ensino e Consultonia";
$dadosboleto["cpf_cnpj"] = "04.222.855/0001-18";
$dadosboleto["endereco"] = "Av. T-4, n� 1.478, Edf. Absolut Business Style, sala A-132 (13� andar)";
$dadosboleto["cidade_uf"] = "Setor Bueno, Goi�nia/GO - CEP: 74.230-030";
$dadosboleto["cedente"] = "Ipecon - Ensino e Consultonia";

// N�O ALTERAR!
include("include/funcoes_itau.php");
include("include/layout_itau.php");
?>
