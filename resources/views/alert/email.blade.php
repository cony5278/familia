@if(isset($created))
	@if($created==TRUE)	
		@foreach ($errors as $error)
		 <div class="alert alert-danger">
	    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    	<strong>Error!</strong> {{$error}}.
	 	 </div>
		@endforeach
	@endif	
@else	
	@if($created==fALSE)	
		<div class="alert alert-success">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Enviado!</strong> Gracias por contactarnos.
	  	</div>
	@endif	
@endif
