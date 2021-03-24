@extends('persona.layouts.layout')



@section('content')

@if(count($personas))

 <ul class="collection">

    @foreach($personas as $persona)
	    <li class="collection-item avatar">
	      <span class="title">{{$persona->nombre . ' '. $persona->apellido}}</span>
	      <p><strong>Documento: </strong>{{$persona->documento}} - <strong>Telefono:</strong> {{$persona->numero}} - <strong> Direccion: </strong>{{$persona->direccion}}<br>
	      </p>
	      <a href="{{route('persona.show', $persona)}}" class="btn secondary-content tooltipped" data-position="top" data-delay="50" data-tooltip="Ver">Ver  <i class="material-icons">visibility</i></a>
	    </li>
    @endforeach
  </ul>

  
@else
   <h6>No Hay resultados...</h6>
@endif	


@stop