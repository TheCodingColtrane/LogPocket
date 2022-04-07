$(document).ready(function(){
	
	$('#button').click(function Valida('#form'){
	var v = document.getElementById('#form');
	var f = v.getElementByTagName('input');
	
	for(var i=0; i < f.length; i++){
		if(f[i].value == ""){
			alert("O campo deve ser preenchido!");
			f[i].focus();
			return false;
		}
	}
	return true;
	});
});


function validacao(){
	if(document.form.usuario[].value==""){
		alert("O campo deve ser preenchido!");
		return false;
	}
}