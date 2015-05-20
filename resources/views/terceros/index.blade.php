@extends('app')

@section('content')
	
	
		<h3>Usuarios Registrados</h3>
	

	<div class="col-xs-12 col-sm-2">
	<form action="demo_form.asp" method="get">
		
		  <input  type="text" 
				  class="form-control form-control floating-label" 
				  id="inputSuccess1" 
				  list="browsers" 
				  name="browser" 
				  placeholder="Cédula">
		  <datalist id="browsers">

		  	@foreach($terceros as $tercero)
		    	<option value="{{ $tercero->cedula }}">
		    @endforeach

		  </datalist>
		  
		  <input type="submit" value="Buscar" class="btn btn-primary">

	</form>
	</div><br><br><br>



	<a href="terceros/create" class="btn btn-primary" role="button">nuevo usuario</a><br><br>
	

	@if (Session::has('message'))
		<span class="alert alert-{!! Session::get('class') !!} "> 
			{!! Session::get('message') !!} 
		</span> 
		<br><br>
	@endif
	
	
	<table class="table table-bordered table-striped">
		<thead>
			<tr>				
				<th>Id</th>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Rol</th>
				<th>Dirección</th>
				<th>Teléfono</th>
				<th>Email</th>
				<th>Notas</th>
				<th>Acciones</th>
			</tr>					
		</thead>
		<tbody>
			@foreach($terceros as $tercero)				
				<tr>
					<td>{{ $tercero->id }}</td>
					<td>{{ $tercero->cedula }}</td>
					<td>{{ $tercero->nombre }}</td>
					<td>{{ $tercero->rol }}</td>
					<td>{{ $tercero->direccion }}</td>
					<td>{{ $tercero->telefono }}</td>
					<td>{{ $tercero->email }}</td>
					<td>{{ $tercero->nota }}</td>
					<td>						
						<div class="btn-group-vertical" role="group" aria-label="Extra-small button group">
						   
						   {!! link_to('terceros/'.$tercero->id.'/edit', 'Actualizar') !!}
						   <a href="#" onclick="miFuncion({!! $tercero->id !!})">Eliminar</a>

						</div>
					</td>
				</tr>			
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
	{!! $terceros->render() !!}
	</div>		
 
@endsection