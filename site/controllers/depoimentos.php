<?php
class Depoimentos extends CI_Controller {

	public function index()
	{
		$data['pagina'] = 'depoimentos/depoimentos';

		$this->load->view('inicio/inicio_view',$data);
	}

}