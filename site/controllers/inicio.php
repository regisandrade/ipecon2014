<?php
class Inicio extends CI_Controller {

	function __construct() {
		parent::__construct();

        $this->load->library('user_agent');

		// if (!$this->agent->is_mobile())
		// {
		// 	redirect(base_url().'/m/');
		// }

	}

	public function index()
	{
	    set_menu('home');
		$this->load->view('inicio/inicio_view');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */