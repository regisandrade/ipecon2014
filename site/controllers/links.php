<?php
class Links extends CI_Controller {

	public function index()
	{
		$data['pagina'] = 'links/links';

		$this->load->view('inicio/inicio_view',$data);
	}

}