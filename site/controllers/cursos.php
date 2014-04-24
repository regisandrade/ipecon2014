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

     public function getCurso(){
          $data['pagina'] = 'cursos/detalheCurso';

          $data['curso'] = $this->db
                                 ->join('curso','codg_curso = codg_curso_descricao')
                                 ->where('codg_curso',$this->uri->segment(3))
                                 ->get('descricaoCursos')->row();;

          $this->load->view('inicio/inicio_view',$data);
     }
}