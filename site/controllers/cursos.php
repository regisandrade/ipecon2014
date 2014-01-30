<?php
class Cursos extends CI_Controller {

	public function index()
	{
		$data['pagina'] = 'cursos/cursos';

		$this->load->view('inicio/inicio_view',$data);
	}
}