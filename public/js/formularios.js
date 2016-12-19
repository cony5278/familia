$(document).ready(function(){
	limpiarCampos=function(){	
			$('#fContacto').each (function(){
				this.reset();
			});		
	}
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
					limpiarCampos();
			},
			error:function(data){
				 var errors = data.responseJSON;
				$('#alertas').css('display','inline-block');				
				for(var k in errors){
					var div=`<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Error!</strong>`;	
						div=div+errors[k]+"</div>";				
						$('#alertas').append(div);		
				};
					
			}					
		});
		return false;
	};
	$('#submit-email').click(function(){
		//alert("entro");
		formulario("POST","formulario");
	});

});

