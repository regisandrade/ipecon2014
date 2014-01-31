<?php 
class Fotos extends CI_Controller {

	public function index()
	{
		$data['pagina'] = 'fotos/fotos';
	    
		$data['galerias'] = $this->db->get('galerias')->result();

		$this->load->view('inicio/inicio_view',$data);
	}

}