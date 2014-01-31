<?php
class Cursos extends CI_Controller {

	public function index()
	{
		$data['pagina'] = 'cursos/cursos';

		$data['cursos'] = $this->db
							   ->where('Status',1)
							   ->order_by('Nome')
							   ->get('curso')->result();;

		$this->load->view('inicio/inicio_view',$data);
	}
}