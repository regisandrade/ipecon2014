<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

<style>
body{
	margin:0;
	padding:0;
	}
#topo{
	background:#f3f3f3;
	padding:30px 10px;
	border-bottom:1px solid #E5E5E5;
	}

#login{
	width:300px;
	height:250px;
	padding:10px;
	margin:30px;
	background:#f1f1f1;
	border-bottom:1px solid #ddd;
	border-right:1px solid #E5E5E5;
	}
	
#login p{
margin:10px 0;
color:#666;	
font:15px Arial, Helvetica, sans-serif;
}	
		
#login input[type='text'],#login input[type='password']{
	margin:2px 0;
    -moz-border-bottom-colors: none;
    -moz-border-image: none;
    -moz-border-left-colors:  #4593AF;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    -moz-box-sizing: border-box;
    background: none repeat scroll 0 0 #FFFFFF;
    border-color: #C0C0C0 #D9D9D9 #D9D9D9;
    border-radius: 1px 1px 1px 1px;
    border-right: 1px solid #D9D9D9;
    border-style: solid;
    border-width: 1px;
    display: inline-block;
    padding:4px 2px;
    margin: 0;
    padding: 10px 8px;
	font-size: 15px;
    width: 270px;
}

#login input:focus{
	outline:none;
	border-color:  #83B5DA #83B5DA #83B5DA;
	}
#login a{
	font:12px Arial, Helvetica, sans-serif;
	color:#06F;
	}		
#bottom{
	background-color: #606060 !important;
    background-image: -moz-linear-gradient(center top , #4D90FE, #4787ED) !important;
    border: 1px solid #606060 !important;
    color: #FFFFFF !important;
    text-shadow: 0 1px rgba(0, 0, 0, 0.1) !important;
	width:100px !important;
	cursor:pointer;
	}

#error p{
border: 1px solid #D59C8C;
background:#FCF7F5;
width:300px;
margin-left:30px;
padding:4px;	
}
			
</style>
</head>

<body>
<div id="topo">
<img src="<?php echo base_url()?>arquivoadmin/imagem/objeto.png" />
</div>
<div id="error"><?php echo validation_errors(); if(isset($error)){echo $error;}?></div>
<div id="login">
<form id="form1" name="form1" method="post" action="">

<p>E-mail:</p>
<p>
  <input type="text" name="login"  />
</p>
<p>Senha:</p>
<p>
  <input type="password" name="senha" />
</p>
<p>
  <input type="submit" id="bottom" name="" value="Entrar" />
</p>
</form>
<br />
<p><a target="_blank" href="http://www.objetocomunicacao.com.br/" >Não consegue entrar?</a></p>
</div>


</body>
</html>