<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
    </head>
    <body>
        <h1>Nombre o Empresa:  {{$contact->name}}</h1>
		</br>
	    <p>Duda o inquietud, {{$contact->question}}</p>
		<p>Correo electronico: {{$contact->email}}</p>			
		<p>telefono: {{$contact->phone}}</p>		
    </body>
</html>