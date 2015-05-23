<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>@section('title') Cilindros @show</title>

	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/material-wfont.min.css') !!}	
	{!! Html::style('bower_components/sweetalert/lib/sweet-alert.css') !!}

	<!--{!! Html::style('bower_components/bootstrap-sweetalert/assets/docs.css') !!}-->
	<!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">COMPRE BIEN</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/') }}">Inicio</a></li>
					</ul>
					@if (Auth::check())
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/terceros') }}">Usuarios</a></li>
						<li><a href="{{ url('/terceros') }}">Alquiler</a></li>
						<li><a href="{{ url('/terceros') }}">Cilindro</a></li>
						<li><a href="{{ url('/terceros') }}">LLenado</a></li>
					</ul>
					@endif

					<ul class="nav navbar-nav">
						<li><a href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
						<li><a href="{!! url('/auth/login') !!}">Loguearse</a></li>
						<li><a href="{!! url('/auth/register') !!}">Registrarse</a></li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{!! url('/auth/logout') !!}">Cerrar Sesión</a></li>
								</ul>
							</li>
							@endif
						</ul>
					</div>
				</div>
			</nav>

			<div class="container">
				@yield('content')
			</div>

			<!-- Scripts -->

			{!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}
			{!! Html::script('bower_components/jquery/dist/js/bootstrap.min.js') !!}
			{!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
			{!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}	
			{!! Html::script('bower_components/sweetalert/lib/sweet-alert.min.js') !!}	


	<!--
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
-->

<!-- INICIALIZA MATERIAL DESIGN -->
<script type="text/javascript">
$(document).on('ready', function(){
	$.material.init();
});
</script>

<!-- FUNCIONES Y VARIABLES PARA SWEET-ALERT -->
<script>	
var miAlert = document.getElementById('miAlert');

var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');
var btn3 = document.getElementById('btn3');
var btn4 = document.getElementById('btn4');
var btn5 = document.getElementById('btn5');
var btn6 = document.getElementById('btn6');
var btn7 = document.getElementById('btn7');


function miFuncion(id) { 
	swal({
		title: "¿Deseas eliminar este usuario?",
		text: "¡Será eliminado de la base de datos!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "¡Si, eliminar usuario!",
		closeOnConfirm: false
	},
	function(){
		swal("¡Eliminado!", "Usuario eliminado.", "success");
		timer: 100000
		location.href='terceros/'+id+'/delete';

	});
};			

miAlert.onclick = function() { 
	swal({
		title: "¿Deseas eliminar este usuario?",
		text: "¡No hay marcha atras!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "¡Si, eliminar usuario!",
		closeOnConfirm: false
	},
	function(){
		swal("¡Eliminado!", "El usuario ha sido eliminado de la base de datos.", "success");
	});
};


btn11111.onclick = function() { 
			  //swal("Yeah!");
			  alert(document.getElementById("kall").value); 
			};
			btn2.onclick = function() { 
				swal("¡Hey!", "Visita Break.coffee");
			};
			btn3.onclick = function() { 
				swal("¡Buen trabajo!", "Has borrado tu vida con éxito", "success")
			};
			btn4.onclick = function() { 
				swal({
					title: "¡Hola!",
					text: "Este mensaje será destruido en 2 segundos.",
					timer: 2000
				});
			};
			btn5.onclick = function() { 
				swal({
					title: "¿Estás seguro?",
					text: "¡No hay marcha atras!",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "¡Si, borrar mi memoria ahora!",
					closeOnConfirm: false
				},
				function(){
					swal("¡Borrado!", "Tu memoria ha sido borrada.", "success");
				});
			};
			btn6.onclick = function() { 
				swal({
					title: "¿Estás seguro?",
					text: "¡Si continuas no serás capaz de recordar nada!",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Si, borrame la memoria!",
					cancelButtonText: "No, ¡cancela por favor!",
					closeOnConfirm: false,
					closeOnCancel: false
				},
				function(isConfirm){
					if (isConfirm) {
						swal("¡Memoria borrada!", "Tu nuevo nombre ahora es Macario Isidoro", "success");
					} else {
						swal("Cancelado", "Estás a salvo :) ¡Por ahora!", "error");
					}
				});
			};
			btn7.onclick = function() { 
				swal({
					title: "Break.coffee",
					text: "Fuck Yeah!",
					imageUrl: "http://break.coffee/wp-content/uploads/2015/03/coffee.jpg"
				});
			};
			</script>

		</body>
		</html>
