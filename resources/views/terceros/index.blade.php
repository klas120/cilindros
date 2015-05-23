@extends('app')

@section('content')


<h3>Usuarios Registrados</h3>
<br>
	

	{!! Form::open(array('class' => 'form-inline', 'url' => 'terceros_mostrar', 'method' => 'get' )) !!} 

	<div class="col-lg-6">
		<div class="input-group">
	  		<span class="input-group-btn">
	           {!! Form::button( '<span class="glyphicon glyphicon-search" aria-hidden="true"></span>'.'   '.'Buscar', 
				['type' => 'submit', 'aria-hidden'=>'true', 'class' => 'btn btn-primary btn-xs']) !!}
	        </span>
				{!! Form::text('micedula', null,
				['list' => 'browsers', 'class'=>'form-control floating-label', 'placeholder'=>'Cédula a buscar', 'required']) !!}
			<datalist id="browsers">
				@foreach($cedulas as $cedula)
					<option value="{{ $cedula->cedula }}"></option>
				@endforeach
			</datalist>	 
		</div>
	</div>	

	{!! Form::close() !!}

 

<a href="terceros/create" class="btn btn-primary btn-xs" role="button">		 
	nuevo usuario
</a>		

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