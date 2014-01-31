<?php
class Professores extends CI_Controller {

	public function index()
	{
		$data['pagina'] = 'professores/professores';

		$data['professores'] = $this->db
								->order_by('Nome')
								->get('professor')->result();

		$this->load->view('inicio/inicio_view',$data);
	}

}