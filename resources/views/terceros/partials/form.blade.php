<div class="col-sm-6">

	<div class="form-group">
		{!! Form::text('cedula', null, ['class'=>'form-control floating-label', 'placeholder'=>'Cedula: ', 
		'required']) !!}

		@if($errors->has('cedula')) 
		<p class="text-danger">{{ $errors->first('cedula') }}</p>
		@endif
	</div><br>

	<div class="form-group">
		{!! Form::text('nombre', null, ['class'=>'form-control floating-label', 'placeholder'=>'Nombre: ',
		'required']) !!}

		@if($errors->has('nombre')) 
		<p class="text-danger">{{ $errors->first('nombre') }}</p>
		@endif
	</div><br>

	<div class="form-group">
		{!! Form::text('telefono', null, ['class'=>'form-control floating-label', 'placeholder'=>'Teléfono: ',
		'required']) !!}

		@if($errors->has('telefono')) 
		<p class="text-danger">{{ $errors->first('telefono') }}</p>
		@endif
	</div><br>

	<div class="form-group">
		{!! Form::text('direccion', null, ['class'=>'form-control floating-label', 'placeholder'=>'Dirección: ',
		'required']) !!}

		@if($errors->has('direccion')) 
		<p class="text-danger">{{ $errors->first('direccion') }}</p>
		@endif
	</div><br>

</div> <!-- /.col-sm-6 --> 


<div class="col-sm-6">

	<div class="form-group">
		{!! Form::text('email', null, ['class'=>'form-control floating-label', 'placeholder'=>'Correo electrónico: ',
		'required']) !!}

		@if($errors->has('email')) 
		<p class="text-danger">{{ $errors->first('email') }}</p>
		@endif
	</div><br>

	<div class="form-group">
		{!! Form::select('rol', 
		['cliente'=>'Cliente', 'proveedor'=>'Proveedor', 'administrativo'=>'Administrativo'],
		null, 
		['class'=>'form-control floating-label', 'placeholder'=>'Roles de usuarios: ']) !!}

		@if($errors->has('rol')) 
		<p class="text-danger">{{ $errors->first('rol') }}</p>
		@endif
	</div><br>

	<div class="form-group">
		{!! Form::textarea('nota', 
		null, 
		['rows'=>'6', 'class'=>'form-control floating-label', 'placeholder'=>'Anotaciones: ']) !!}

		@if($errors->has('nota')) 
		<p class="text-danger">{{ $errors->first('nota') }}</p>
		@endif
	</div>

</div> <!-- /.col-sm-6 --> 