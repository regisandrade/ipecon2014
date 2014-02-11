<?php
class Inscricao extends CI_Controller {

	public function preInscricao()
	{
		$data['pagina'] = 'inscricao/inscricao';

		$data['cursos'] = $this->db
								->where('Status',1)
								->order_by('Nome')
								->get('curso')->result();

		$data['cursoSelecionado'] = $this->uri->segment(3);

		$this->load->view('inicio/inicio_view',$data);
	}

	public function gravarPreInscricao()
	{
		# Passos
		# 1. Verificar se o aluno já esta cadastrado no curso pretendente e ano também, não deixar prosseguir
		#    com o cadastro
		# 2. Verificar se o aluno já tem cadastro de endereço, caso sim, atualizar os dados do endereço, senão
		#    cadastrar um novo endereço
		# 3. Verificar se o aluno já tem cadastro de graduação, caso sim, atualizar os dados da graduação, senão,
		#    cadastrar uma nova graduação
		# 4. Verificar se o aluno já tem cadastro de usuário, caso sim, não gravar outro, e continuar o cadastro
		# 5. Capiturar o ultimo numero do boleto e somar + 1
		# 6. Gerar um novo boleto de pre-inscrição
		# 7. Enviar um e-mail com o link do boleto para o aluno imprimir
		# 8. Enviar um e-mail com o comprovante/dados de inscrição
		# 9. Enviar um e-mail para IPECON informando que mais uma inscrição foi realizada
		# 10. Direcionar o aluno para uma página para impressão do boleto.
	}

}
?>