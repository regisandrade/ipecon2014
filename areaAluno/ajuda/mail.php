<?php
//=============================================//
// Propriet�rio : IPECON - Ensino e Consultoria
// Site : www.ipecon.com.br
// Autor : R�gis Rodrigues de Andrade
// P�gina : Envio de d�vida pelo Aluno
//=============================================//

# Assunto
$assunto = "D�vida do Aluno: ".$nome;

# Mensagem
$texto = '<p style="font-family:Verdana, Arial, Helvetica, sans-serif"><center><h4>D�vida do Aluno: '.$nome.'</h4></center>';
$texto .= $mensagem.'</p>';

# Cabe�alho
$cabecalho  = "MIME-Version: 1.0\r\n";
$cabecalho .= "Content-type: text/html; charset=iso-8859-1\r\n";
$cabecalho .= "From: ".$nome." <".$email.">";

# Enviar
mail($para,$assunto,$texto,$cabecalho);

# Resposta
?>
<script>
   alert("D�vida enviada com sucesso.");
   document.location = "../home.php?pagina=13";
</script>
