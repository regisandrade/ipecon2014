<?php
class Professores extends CI_Controller {

	public function index()
	{
		$data['pagina'] = 'professores/professores';

		$data['produto'] = $this->db->get('professores')->result();

		$this->load->view('inicio/inicio_view',$data);
	}

}