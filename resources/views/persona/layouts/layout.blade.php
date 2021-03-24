<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agenda de personas / Crud</title>
	
	<link rel="stylesheet" href="{!! asset('https://fonts.googleapis.com/icon?family=Material+Icons') !!}">
	<link rel="stylesheet" href="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css') !!}">

  <style>
  	
		.fondo{
			background-image: url('/svg/photo_bg.jpg');
	       background-size: 100% 130%;

		}
		#imgs{
			width: 64px;
			height: 64px;
		}
		.card-title{
			color: #000;
		}
		.btn-floating{
			margin-right: 0.5em;
			float: left;
			height: 64px;
			width: 64px;
		}
		.centrado{
           margin-left: 35%;
		}
  </style>

		

</head>
<body class="fondo">
<br><br><br>

	<div class="container">
		<div class="row">
			<div class="">
				<div class="card grey darken-4">
					<ul class="navbar-nav navbar-left">
                    <li class="nav-item">
                      <form action="{{ url('/logout') }}" method="POST" >
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                </li>
                </ul>
		            <div class="card-content grey lighten-4 ">
		              <span class="card-title">Agenda telefonica de personas - CRUD</span>
		              <a class="btn green lighten-2 right" data-position="top" data-delay="50" data-tooltip="Nuevo" href="{{route('persona.create')}}">
							Agregar<i class="material-icons">add</i>
						</a>

						<a class="btn right grey darken-1 tooltipped" data-position="top" data-delay="50" data-tooltip="Home" href="{{route('persona.index')}}">
							Agenda<i class="material-icons">store</i>
						</a>
								       

						<hr>
						<br>
						@yield('content')
						<br>
						<hr>
						<h6>&copy; Laboratorio Gugler - Curso Programacion en PHP con Laravel</h6>
					</div>
				</div>
          </div>
		</div>
	</div>


  
  <script src="{{asset('assets/js/jquery-3.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
	<script>
		$(document).ready(function() {
		    $('select').material_select();
		  });
		 $(document).ready(function(){
		    $('.tooltipped').tooltip({delay: 50});
		  });
      
	</script>
</body>
</html>
