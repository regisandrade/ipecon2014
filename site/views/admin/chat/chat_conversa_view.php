<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conversa</title>
<script src="<?php echo base_url()?>arquivoadmin/jquery-ui/js/jquery-1.8.3.js"></script>
<style>body{margin:0;font-family:arial;}#top{padding:5px; background:#069; color:#FFF;}
#conversa{
	height:300px;
	overflow:auto;
	}
#form-msg{
	background:#f3f3f3;
	height:70px;
	}
.row-conversa{
	border-bottom:1px solid #f0f0f0;
	padding-bottom:13px;
	}
.atendente 	.row-user{
	color:#069;
	}
.row-user{
	font-size:13px;
	padding:0 4px;
	}	
.row-mensage{
	font-size:13px;
	padding:2px 4px;
	}
.row-date{
	font-size:10px;
	font-weight:bold;
	float:right;
	}				
</style>
</head>

<body>

<div id="top"><?php echo $c->ch_cliente?></div>
<div id="conversa"><?php echo $c->ch_conversa?></div>

<?php 
if($c->ch_usuario==get_user()->us_id){?>
<div id="form-msg">
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="400px"><textarea name="" style="width:400px; height:45px;" id="txt-new-msg"></textarea></td>
    <td><input onclick="send_mensagem()" style="cursor:pointer; border:none; background:#666; color:#FFF; padding:15px 15px;" type="button" value="Enviar"  /></td>
  </tr>
</table>
</div>
<?php }?>

<script>
function send_mensagem(){
	$.ajax({
		url: '<?php echo base_url('index.php/admin/chat/new_msg_ajax/'.$c->ch_id)?>',
		type:'POST',
		data:{msg:$("#txt-new-msg").val()},
		success:function(){
			$("#txt-new-msg").val('');
			atualizar_conversa();
			scroll_conversa();
			}
		});
	}
	
function atualizar_conversa(){
	$("#conversa").load('<?php echo base_url('index.php/admin/chat/get_conversa_ajax/'.$c->ch_id)?>');
	scroll_conversa();
	}
	
$(function(){
	setInterval('atualizar_conversa()',10000);
	scroll_conversa();
	});	

function scroll_conversa(){
$("#conversa").animate({
scrollTop: 1000000
},100);
}	
		
</script>


</body>
</html>