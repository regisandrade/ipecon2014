<?php
class Inscricao extends CI_Controller {

	public function preInscricao()
	{
		$data['pagina'] = 'inscricao/inscricao';

		$data['cursos'] = $this->db
								->where('Status',1)
								->order_by('Nome')
								->get('curso')->result();

		$this->load->view('inicio/inicio_view',$data);
	}

	public function gravarPreInscricao()
	{
		/*echo "<pre>";
		print_r($this->input->post());
		echo "</pre>";*/
		//die();
		$data['pagina'] = 'inscricao/inscricao';		

		# Limpar formatação de campos
		$idNumero = str_replace('-', '', str_replace('.', '', $this->input->post('cpf')));
		
		# Passos:
		# 1. Verificar se o aluno já esta cadastrado no curso pretendente e ano também, não deixar prosseguir
		#    com o cadastro
		$tabela = 'aluno';

		$aluno = $this->db->where('Id_Numero', $idNumero)
						  ->where('Ano', $this->input->post('ano'))
						  ->where('Curso', $this->input->post('codg_curso'))
						  ->count_all_results($tabela);

		if ($aluno > 0) {
			$erroInscricao = 1;
			redirect(base_url('index.php').'/inscricao/preInscricao/'.$this->input->post('codg_curso').'/'.$erroInscricao);
			exit();
		}

		# Gravar dados
		$dadosAluno = array(
			'Ano' => $this->input->post('ano') ,
			'Id_Numero' => $idNumero,
			'Nome' => $this->input->post('nome'),
			'Data_Nascimento' => dataUSA($this->input->post('data_nascimento')),
			'Naturalidade' => $this->input->post('naturalidade'),
			'UF_Naturalidade' => $this->input->post('uf_1'),
			'Nacionalidade' => $this->input->post('nacionalidade'),
			'Sexo' => $this->input->post('sexo'),
			'RG' => $this->input->post('rg'),
			'Orgao' => $this->input->post('orgao'),
			'CPF' => $idNumero,
			'e_Mail' => $this->input->post('email'),
			'Data_Cadastro' => date('Y-m-d H:i:s'),
			'Status' => 0,
			'Curso' => $this->input->post('codg_curso'),
			'cidadeCurso' => null,
			'Web' => 1,
			'Enviado' => 0,
			'tituloEleitoral' => null,
			'reservista' => null,
			'estadoCivil' => null,
			'filiacaoPai' => null,
			'filiacaoMae' => null,
			'situacao' => 1,
			'twitter' => null
		);
		//$this->db->insert($tabela,$dadosAluno);

		
		# 2. Verificar se o aluno já tem cadastro de endereço, caso sim, atualizar os dados do endereço, senão
		#    cadastrar um novo endereço
		$tabela = 'endereco';

		$endereco = $this->db->where('Id_Numero', $idNumero)
							 ->count_all_results($tabela);
		
		if ($endereco > 0) {
			# Atualizar o endereço
			$dadosEndereco = array(
				'Endereco' => $this->input->post('endereco'),
				'Bairro' => $this->input->post('bairro'),
				'CEP' => $this->input->post('naturalidade'),
				'Cidade' => $this->input->post('cep'),
				'UF' => $this->input->post('uf_2'),
				'Fone_Residencial' => $this->input->post('fone_residencial'),
				'Fone_Comercial' => $this->input->post('fone_comercial'),
				'Celular' => $this->input->post('celular'),
				'Data_Alteracao' => date('Y-m-d H:i:s')
			);
			$this->db->where('Id_Numero', $idNumero);
			$this->db->update($tabela, $dadosEndereco);			
		}else{
			# Gravar dados
			$dadosEndereco = array(
				'Id_Numero' => $idNumero,
				'Endereco' => $this->input->post('endereco'),
				'Bairro' => $this->input->post('bairro'),
				'CEP' => $this->input->post('naturalidade'),
				'Cidade' => $this->input->post('cep'),
				'UF' => $this->input->post('uf_2'),
				'Fone_Residencial' => $this->input->post('fone_residencial'),
				'Fone_Comercial' => $this->input->post('fone_comercial'),
				'Celular' => $this->input->post('celular'),
				'Data_Cadastro' => date('Y-m-d H:i:s'),
				'Tipo_Pessoa' => 'A'
			);
			$this->db->insert($tabela,$dadosEndereco);
		}
		

		# 3. Verificar se o aluno já tem cadastro de graduação, caso sim, atualizar os dados da graduação, senão,
		#    cadastrar uma nova graduação
		$tabela = 'graduacao';

		$graduacao = $this->db->where('Id_Numero', $idNumero)
							 ->count_all_results($tabela);

		if ($graduacao == 0) {
			# Gravar dados
			$dadosGraduacao = array(
				'Id_Numero' => $idNumero,
				'Curso_Graduacao' => $this->input->post('curso'),
				'Instituicao' => $this->input->post('instituicao'),
				'Sigla' => $this->input->post('sigla'),
				'Ano_Conclusao' => $this->input->post('conclusao'),
				'Data_Cadastro' => date('Y-m-d H:i:s')
			);
			$this->db->insert($tabela,$dadosGraduacao);
		}


		# 4. Verificar se o aluno já tem cadastro de usuário, caso sim, não gravar outro, e continuar o cadastro
		$tabela = 'usuario_aluno';

		$usuarioAluno = $this->db->where('Id_Numero', $idNumero)
								 ->count_all_results($tabela);

		if ($usuarioAluno == 0) {
			# Gravar dados
			$dadosUsuario = array(
				'Id_Numero' => $idNumero,
				'Login' => $this->input->post('email'),
				'Senha' => gerarSenha(),
				'Nome' => $this->input->post('nome'),
				'situacao' => 1,
				'status' => 1
			);
			$this->db->insert($tabela,$dadosUsuario);
		}

		# 5. Capiturar o ultimo numero do boleto e somar + 1
		$tabela = 'boletos';

		$boletos = $this->db->count_all_results($tabela);

		if ($boletos == 0) {
			# Primeiro número
			$nossoNum = '99999999';
		}else{
			# 6. Gerar um novo boleto de pre-inscrição
			$dadosBoleto = $this->db
								->order_by('nossoNumero')
								->limit(1)							  
								->get($tabela)->row();
			//echo $this->db->last_query();
			# Novo número
			$nossoNum = $dadosBoleto->nossoNumero - 1;
			
			# Gravar dados
			$arrBoleto = array(
				'idNumero' => $idNumero,
				'nossoNumero' => $nossoNum,
				'codgCurso' => $this->input->post('codg_curso'),
				'data' => date('Y-m-d H:i:s'),
				'status' => null
			);
			$this->db->insert($tabela,$arrBoleto);
		}

		$de = "ipecon@ipecon.com.br";
		# 7. Enviar um e-mail com o link do boleto para o aluno imprimir
		$texto = '<!DOCTYPE html>
				<html>
				<head>
				<meta charset="UTF-8">
				<title>IPECON</title>
				<style type="text/css">
					*{
						font-family: verdana, arial;
						font-size: 13px;
					}
					#corpo{
						width: 100%;
					}
					#topo{
						width: 100%;
						height: 110px;
						background-color: #DDD;
						border: 1px solid #CCC;
						position: relative;
					}
					#topo > img {
						width: 250px;
						margin: 5px;
					}
					#conteudo{
						width: 99.6%;
						position: relative;
						border: 1px solid #CCC;
						padding-left: 5px;
					}
					#rodape{
						width: 100%;
						height: 60px;
						text-align: center;
						font-size: 11px;
						position: relative;
						background-color: #DDD;
						border: 1px solid #CCC;
					}
				</style>
				</head>

				<body>
					<div id="corpo">
						<div id="topo"><img src="http://www.ipecon.com.br/imagens/marca.png" border="0" /></div>
						<div id="conteudo">
							<p>Prezado(a) <strong>'.$this->input->post('nome').'.</strong></p>
							<p>Agradecemos pela escolha de nossa instituição.<br />
							<br/><p>Garanta sua vaga efetuando o pagamento do boleto no valor de R$ 100,00 e enviando os seguintes documentos:</p>
							<ul>
								<li>Curriculum-Vitae simplificado; </li>
								<li>Fotocópia do Diploma de Curso Superior; </li>
								<li>Fotocópia da Carteira de Identidade; </li>
								<li>Fotocópia do CPF; </li>
								<li>Foto 3 x 4. </li>
							</ul>
							<p style="text-align: center;"><a href="http://www.ipecon.com.br/boletophp/boleto_itau.php?idNumero='.$idNumero.'&curso='.$this->input->post('codg_curso').'"><img src="http://www.ipecon.com.br/imagens/imgBoletoBancario.jpg" border="0" /><br/>imprimir Boleto</a>
							<p>&nbsp;</p>
							<p>Atenciosamente,
							<br /><br />
							IPECON - Ensino e Consultoria<br>
						</div>
						<div id="rodape">Av. T-4, nº 1.478, Ed. Absolut Business Style, sala A-132 (13º andar)<br>
										Setor Bueno, Goiânia/GO - CEP: 74.230-030<br>
										(62) 3214-2563 - (62) 3214-2563<br>
						</div>
					</div>
				</body>
				</html>';
		$assunto = "[Não responda] Pré-inscrição realizada - IPECON - Pós-Graduação";
		email($de,$this->input->post('email'),$assunto,$texto);
		# 8. Enviar um e-mail com o comprovante/dados de inscrição
		# 9. Enviar um e-mail para IPECON informando que mais uma inscrição foi realizada
		# 10. Direcionar o aluno para uma página para impressão do boleto.
	}

}
?>