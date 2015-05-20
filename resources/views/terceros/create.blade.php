@extends('app')

@section('content')

{!! link_to('/terceros', 'Ver usuarios') !!}<br><br>

<h3>Crear usuario</h3><br>

@if (Session::has('message'))
	<span class="alert alert-{!! Session::get('class') !!} "> 
		{!! Session::get('message') !!} 
	</span> 
	<br><br><br>
@endif

{!! Form::open(['route' => 'terceros.store']) !!} 

@include('terceros.partials.form')

<div class="form-group col-xs-12">
{!! Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection