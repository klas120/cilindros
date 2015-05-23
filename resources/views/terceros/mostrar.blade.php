@extends('app')

@section('content')


<h3>Usuario</h3>	


{!! link_to('terceros', 'Regresar') !!} <br><br>	


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
		@foreach($tercero as $tercer)				
		<tr class="active">
			<td>{{ $tercer->id }}</td>
			<td>{{ $tercer->cedula }}</td>
			<td>{{ $tercer->nombre }}</td>
			<td>{{ $tercer->rol }}</td>
			<td>{{ $tercer->direccion }}</td>
			<td>{{ $tercer->telefono }}</td>
			<td>{{ $tercer->email }}</td>
			<td>{{ $tercer->nota }}</td>
			<td>						
				<div class="btn-group-vertical" role="group" aria-label="Extra-small button group">					
					<a title="Actuliza este usurio." href="{!! URL::to('terceros/'.$tercer->id.'/edit') !!}">Actualizar</a> |
					<a title="Elimina este usurio!" href="#" onclick="miFuncion({!! $tercer->id !!})">Eliminar</a>
				</div>
			</td>
		</tr>			
		@endforeach
	</tbody>
</table>

<div class="text-center">
	{!! $tercero->render() !!}
</div>	

<!-- ---------------------------------------------------------------------------------------------------- -->

	
<!-- ---------------------------------------------------------------------------------------------------------- -->

@endsection