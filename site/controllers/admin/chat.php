<?php

class Chat extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->db->where('us_id',get_user()->us_id)->update('usuarios',array('us_time'=>time()));
		
		$munutos_5 = mktime(date('H'),date('i')-5,date('s'),date('m'),date('d'),date('Y'));
		 
		$this->db->where('ch_last_time <',$munutos_5)
		->where('ch_status',1) 
		->update('chat',array('ch_status'=>2));
		
		
		}
	
	
	public function index(){
		
		$this->load->view('admin/chat/chat_index_view');
		}
	
	public function start(){
		$this->db->where('ch_id',$this->uri->segment(4))->update('chat',array(
		 'ch_usuario'=>get_user()->us_id,
		 'ch_status'=>1
		 ));
		 redirect(base_url('index.php/admin/chat/conversa/'.$this->uri->segment(4)));
		}
	
	public function conversa(){
		
		$data['c'] = $this->db->where('ch_id',$this->uri->segment(4))
		->get('chat')->result();
		$data['c'] = $data['c'][0];
		
		
		$this->load->view('admin/chat/chat_conversa_view',$data);
		}
		
		
		
	public function get_conversa_ajax(){
		$data['c'] = $this->db->where('ch_id',$this->uri->segment(4))
		->get('chat')->result();
		echo $data['c'][0]->ch_conversa;
		}
		
	public function new_msg_ajax(){
		$data['c'] = $this->db->where('ch_id',$this->uri->segment(4))
		->get('chat')->result();
		
		$new = "<div class='row-conversa atendente'>
		<b class='row-user'>".get_user()->us_nome."</b>
		<div class='row-mensage'>".$_POST['msg']."</div>
		<div class='row-date'>".date('d/m/Y H:i:s')."</div>
		</div>";
		
	    $new = $data['c'][0]->ch_conversa.$new;
		
		$this->db
		->where('ch_id',$this->uri->segment(4))
		->update('chat',array(
		 'ch_conversa'=>$new
		 ));
		}		
	
	}

?>