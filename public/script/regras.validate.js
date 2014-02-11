$(document).ready( function() {
	$("#formInscricao").validate({
		// Define as regras
		rules:{
			nome: {
				required: true, minlength: 10
			},
			codg_curso: {
				required: true
			},
			data_nascimento: {
				required: true
			},
			naturalidade: {
				required: true
			},
			uf_1: {
				required: true
			},
			nacionalidade: {
				required: true
			},
			rg: {
				required: true, digits : true
			},
			orgao: {
				required: true
			},
			cpf: {
				required: true
			},
			endereco: {
				required: true
			},
			bairro: {
				required: true
			},
			cidade: {
				required: true
			},
			uf_2: {
				required: true
			},
			cep: {
				required: true,	minlength: 10, digits: true
			},
			celular: {
				required: true
			},
			email: {
				required: true, email: true
			},
			curso: {
				required: true
			},
			instituicao: {
				required: true
			},
			sigla: {
				required: true
			},
			conclusao: {
				required: true, digits : true
			},		
		},
		// Define as mensagens de erro para cada regra
		messages:{
			nome:{
				required: "Insira o seu nome",
				minLength: "O seu nome deve conter, no mínimo, 10 caracteres"
			},
			codg_curso:{
				required: "Selecione um curso"
			},
			data_nascimento:{
				required: "Insira a Data de Nascimento"
			},
			naturalidade:{
				required: "Insira a Naturalidade"
			},
			uf_1:{
				required: "Selecione o Estado"
			},
			nacionalidade:{
				required: "Insira a Nacionalidade"
			},
			rg:{
				required: "Insira o número do RG"
			},
			orgao: {
				required: "Insira o Órgão Expedidor"
			},
			cpf: {
				required: "Insira o número do C.P.F."
			},
			endereco: {
				required: "Insira o Endereço"
			},
			bairro: {
				required: "Insira o Bairro"
			},
			cidade: {
				required: "Insira a Cidade"
			},
			uf_2: {
				required: "Selecione o Estado"
			},
			cep: {
                required: "Insira seu CEP",
				minlength: "O CEP deve conter 10 números",
                digits: "Insira apenas números"
            },
			celular: {
				required: "Insira o número do Celular"
			},
			email:{
				required: "Digite o seu e-mail",
				email: "Digite um e-mail válido"
			},
			curso: {
				required: "Insira o nome do Curso"
			},
			instituicao: {
				required: "Insira o nome da Instituição"
			},
			sigla: {
				required: "Insira a Sigla do Curso"
			},
			conclusao: {
				required: "Insira o ano da Conclusão",
				digits: "Insira apenas números"
			},
		},
		errorClass:'error',
    	validClass:'success',
    	errorElement:'span',
    	highlight: function(label) {
			$(label).closest('.control-group').removeClass('success').addClass('error');
		},
		success: function(label) {
			label
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
		},
	    unhighlight: function (element, errorClass, validClass)
	    {
	        $(element).parents(".error")
	                  .removeClass(errorClass)
	                  .addClass(validClass); 
	    }
	});
});