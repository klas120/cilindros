@extends('app')

@section('content')

{!! link_to('terceros', 'Regresar') !!}<br><br>

<h4 class="text text-success">{!! $tercero->rol !!} ({!! $tercero->nombre !!}).</h4>
<br><br>                        

		@if (Session::has('message'))
			<span class="alert alert-{!! Session::get('class') !!} "> 
				{!! Session::get('message') !!} 
			</span> 
			<br><br><br>
		@endif

{!! Form::model($tercero, array('route' => array('actualizar_tercero', $tercero->id))) !!} 

		{!! Form::hidden('id', $tercero->id) !!}
		{!! Form::hidden('cedula', $tercero->cedula) !!}

<div class="col-sm-6">	

	<div class="form-group">
		{!! Form::text('nombre', $tercero->nombre, 
		['class'=>'form-control floating-label', 'placeholder'=>'Nombre: ',	'required']) !!}

		@if($errors->has('nombre')) 
			<p class="text-danger">{{ $errors->first('nombre') }}</p>
		@endif
	</div><br>

	<div class="form-group">
		{!! Form::text('telefono', $tercero->telefono, 
		['class'=>'form-control floating-label', 'placeholder'=>'Teléfono: ', 'required']) !!}

		@if($errors->has('telefono')) 
			<p class="text-danger">{{ $errors->first('telefono') }}</p>
		@endif
	</div><br>

	<div class="form-group">
		{!! Form::text('direccion', $tercero->direccion, 
		['class'=>'form-control floating-label', 'placeholder'=>'Dirección: ', 'required']) !!}

		@if($errors->has('direccion')) 
			<p class="text-danger">{{ $errors->first('direccion') }}</p>
		@endif
	</div><br>

	</div> <!-- /.col-sm-6 --> 


	<div class="col-sm-6">

	<div class="form-group">
		{!! Form::text('email', $tercero->email, 
		['class'=>'form-control floating-label', 'placeholder'=>'Correo electrónico: ','required']) !!}

		@if($errors->has('email')) 
			<p class="text-danger">{{ $errors->first('email') }}</p>
		@endif
	</div><br>

	<div class="form-group">		
		
			{!! Form::select('rol', 
				array(				
					'Cliente'=>'Cliente',
					'Proveedor'=>'Proveedor',			 
				    'Administrador'=>'Administrador'), ''.$tercero->rol, 

			    array(
				    'class'=>'form-control floating-label',
					'placeholder'=>'Roles de usuarios: ')
			)!!}

		@if($errors->has('rol')) 
			<p class="text-danger">{{ $errors->first('rol') }}</p>
		@endif

	</div><br>

	<div class="form-group">
		{!! Form::textarea('nota', $tercero->nota, 
			['rows'=>'6', 'class'=>'form-control floating-label', 'placeholder'=>'Anotaciones: ']) !!}

		@if($errors->has('nota')) 
			<p class="text-danger">{{ $errors->first('nota') }}</p>
		@endif
	</div>

</div> <!-- /.col-sm-6 --> 

<div class="form-group col-xs-12">
{!! Form::button('<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>'.'   '.'Editar cambios', 
['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection