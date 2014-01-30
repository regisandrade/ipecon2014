<?php

class Arigos extends CI_Controller {


	public function index()
	{
		$data['pagina'] = 'artigos/artigos';

		$this->load->view('inicio/inicio_view',$data);
	}
}