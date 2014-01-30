<?php 

class Colecao extends CI_Controller {


	public function index()
	{
		$data['pagina'] = 'colecao/colecao';
	    
		$data['produto'] = $this->db->get('produto')->result();
		$data['modelo']  = $this->db->get('modelo')->result();
		$this->load->view('inicio/inicio_view',$data);
	}
	
	public function produto()
	{
		$data['pagina'] = 'colecao/produtos';
	    
		
		// mostra apenos produto de uma unica categoria
		$data['produto'] = $this->db
		                        ->where('modelo_produto',$this->uri->segment(3))
								->get('produto')->result();
		
		// mostra o nome da categoria						
		$data['descricao'] = $this->db
								  ->where('id_modelo',$this->uri->segment(3))
		                          ->get('modelo')->row(); 
	    
								   
		$data['modelo']  = $this->db->get('modelo')->result();						
		$this->load->view('inicio/inicio_view',$data);
	}
						
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */