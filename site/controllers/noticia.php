<?php 

class Noticia extends CI_Controller {


	public function index()
	{
		$data['pagina'] = 'noticia/noticia';
	    
		$data['noticia'] = $this->db->get('noticia')->result();
		$this->load->view('inicio/inicio_view',$data);
	}
	
	public function descricao_noticia()
	{
		$data['pagina'] = 'noticia/ver_noticia';
	    
		$data['noticia'] = $this->db
		                        ->where('id_noticia',$this->uri->segment(3))
		                        ->get('noticia')->row();
							
		$this->load->view('inicio/inicio_view',$data);
	}
						
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */