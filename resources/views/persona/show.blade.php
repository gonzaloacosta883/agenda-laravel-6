@extends('persona.layouts.layout')



@section('content')
   <div class="row">
        <div class="col s12 ">
          <div class="card ">
            <div class="card-content text-darken-4">
              <h5>{{$persona->nombre .' ' . $persona->apellido}}</h5>
              <p>Documento: {{$persona->documento}}</p>
              
              <p>Numero: {{$persona->numero}}</p>

              <p>Direccion: {{$persona->direccion}}</p>

              <div class="card card-content">
                 ¿ Es familiar?:
                 @if($persona->es_familiar==true)
                  <strong> Si </strong>
                  @else
                  <strong> No </strong>
                  @endif
                          {{--Completar el action del formulario--}}
                          <form action="{{ action('PersonaController@cambiar', $persona->id) }}" method="POST" style="display:inline">
                             {{ method_field('put')}}
                            {{ csrf_field() }}
                
                          <button type="submit" class="btn btn-danger" style="display:inline">
                               Cambiar estado
                          </button>
                          </form>
              </div>
            </div>
            <div class="card-action">
             <div class="row">
               <div class="col s4">
                 <a class="btn-warning green lighten-1 btn" href="{{route('persona.index')}}">Agenda</a>
               </div> 
               <div class="col s4">
                 <a class="btn-warning blue lighten-1 btn"  href="{{route('persona.edit', $persona->id)}}">Editar</a>
               </div>
               <div class="col s4">

             
               <form action="{{route('persona.destroy', $persona->id)}}" method="POST" autocomplete="off">
               {{ method_field('DELETE')}} 
               {{csrf_field()}}
              <button type="submit" class="btn-warning red lighten-1 btn">Borrar</button> 
              </form>
                 
               </div> 
             </div>
            </div>
          </div>
        </div>
      </div>
@stop