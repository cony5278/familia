$(document).ready(function(){

	formulario=function(metodo,id){
			
		event.preventDefault();
		var route=$("."+id).attr('action');
	
		var valor=document.getElementById('token').value;
		
		$.ajax({
			url:route,
			headers:{"X-CSRF-TOKEN":valor},
			method:metodo,
			data:$("."+id).serialize(),
			success:function(resp){
				$('#alertas').css('display','inline-block');				
				$('#alertas').append(resp);			
			},
			error:function(error){
				//alert("error");
				//$('#alertas').css('display','inline-block');		
				//$('#alertas').apped(error);		
				
			}					
		});
		return false;
	};
	$('#submit-email').click(function(){
		//alert("entro");
		formulario("POST","formulario");
	});

});
