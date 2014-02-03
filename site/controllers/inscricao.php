<?php
class Inscricao extends CI_Controller {

     public function index()
     {
          $data['pagina'] = 'inscricao/inscricao';

          $data['cursos'] = $this->db
                                   ->where('Status',1)
                                   ->order_by('Nome')
                                   ->get('curso')->result();

          $this->load->view('inicio/inicio_view',$data);
     }

}
?>