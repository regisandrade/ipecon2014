$(document).ready(function() {
	$('#nodetypeDialog').bind('show', function () {
		setPrompt ('Nodetype for "' + decodeURI (rootName) + '"');
		document.getElementById ("woOption" + rootType).selected = true;
	});

	$('.carousel').carousel({
    	interval: 5000
    })
});

function setPrompt (s) {
	document.getElementById ("prompt").innerHTML = s;
}

function closeDialog () {
	$('#nodetypeDialog').modal('hide');
}

function okWebpageDialog (){
	$("#webpageDialog").modal ('hide');
}

window.addEventListener('load', function () {
	$("#dialog").dialog({
	    autoOpen: false,
	    modal: false,
	    //height: 315,
	    width: 550,
	    title: 'I SIMPÓSIO DE PERÍCIA CONTÁBIL DE GOIÁS',
	    open: function(){
	             $('#myIframe').attr('src','http://www.youtube.com/embed/YdZktzJeUFI?rel=0');
	          }
	});	
	$('#dialog').dialog('open');
}, false);

function abrirVideo(titulo,url) {
	$("#dialogVideos").dialog({
	    autoOpen: false,
	    modal: false,
	    width: 530,
	    title: titulo,
	    open: function(){
	             $('#myIframeVideo').attr('src',url);
	          }
	});	
	$('#dialogVideos').dialog('open');
}