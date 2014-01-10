<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHAT</title>
<script src="<?php echo base_url()?>arquivoadmin/jquery-ui/js/jquery-1.8.3.js"></script>
</head>
<style>
table td{
	font-size:14px;
	border-bottom:1px solid #d9d9d9;
	}
table tr:hover td{
	background:#96D5ED;
	}	
</style>
<body>
<h3 style="margin:2px;color:#999;">Lista de atendimento</h3>

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td bgcolor="#f3f3f3"><strong>Nº</strong></td>
    <td bgcolor="#f3f3f3"><strong>Cliente</strong></td>
    <td bgcolor="#f3f3f3"><strong>E-mail</strong></td>
    <td bgcolor="#f3f3f3"><strong>Assunto</strong></td>
    <td bgcolor="#f3f3f3"><strong>Data</strong></td>
    <td bgcolor="#f3f3f3"><strong>Situação</strong></td>
    <td bgcolor="#f3f3f3"><strong>Atendente</strong></td>
  </tr>
<?php 
$conversas = $this->db
->order_by('ch_status','ASC')
->order_by('ch_data','DESC')
->join('usuarios','us_id=ch_usuario','left')
->get('chat')->result();
foreach($conversas as $c){
?>  
  <tr>
    <td><?php echo $c->ch_id?></td>
    <td><?php echo $c->ch_cliente?></td>
    <td><?php echo $c->ch_email?></td>
    <td><?php echo $c->ch_assunto?></td>
    <td><?php echo date('d/m/Y H:i:s',strtotime($c->ch_data))?></td>
    <td><?php echo st($c->ch_status)?></td>
    <td><?php echo $c->us_id==''?'-'
	:'<a onclick="abrir_conversa('.$c->ch_id.')" href="javascript:void(0)">'.$c->us_nome.'</a>'?>
    <?php if($c->ch_status==0){?>
    <a style="color:#060;" onclick="abrir_conversa(<?php echo $c->ch_id ?>)" href="javascript:void(0)">Atender</a>
      <object  height="0" width="0" data="<?php echo base_url('public/som/chat.mp3')?>"></object>
    <?php }?>
    
    </td>
  </tr>
 <?php }?> 
</table>


<script>
$(function(){
	setInterval('location = "<?php echo current_url()?>"',40000);
	});
function abrir_conversa($id){
	window.open('<?php echo base_url('index.php/admin/chat/start/')?>/'+$id,'Conversa','width=600,height=400');
	setInterval('location = "<?php echo current_url()?>"',2000);
	}
</script>

</body>
</html>

<?php 
function st($st){
	 switch($st){
		 case 0:return 'Espera';break;
		 case 1:return 'Em conversa';break;
		 case 2:return 'Finalizado';break;
		 }
	}
?>

