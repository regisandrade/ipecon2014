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
