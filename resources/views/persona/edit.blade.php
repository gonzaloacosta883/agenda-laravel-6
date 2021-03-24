@extends('persona.layouts.layout')



@section('content')


  <form action="{{route('persona.update' , $persona->id)}}" method="POST" autocomplete="off">
                {{ method_field('PUT')}} {{csrf_field()}}
          
      <input type="hidden" name="id" value="{{{ isset($persona->id) ? $persona->id : ''}}}">

      <div class="input-field col s12">
        Documento:<br>
          <input type="numeric" name="documento" placeholder="Ingrese el DNI" value="{{{ isset($persona->documento) ? $persona->documento : ''}}}"><br>
            
      </div>

       <div class="input-field col s12">
        Nombre:<br>
          <input type="text" name="nombre" placeholder="Ingrese el nombre" value="{{{ isset($persona->nombre) ? $persona->nombre : ''}}}"><br>
            
      </div>

       <div class="input-field col s12">
               Apellido:<br>
          <input type="text" name="apellido" placeholder="Ingrese el apellido" value="{{{ isset($persona->apellido) ? $persona->apellido : ''}}}"><br>
         
        </div>


      <div class="input-field col s12 "> 
               Direccion del domicilio:<br>
          <input type="text" name="direccion" placeholder="Ingrese su direccion" value="{{{ isset($persona->direccion) ? $persona->direccion : ''}}}"><br>

        
      </div>

       <div class="input-field col s12 ">
                Numero Telefono:<br>
          <input type="text" name="numero" placeholder="Ingrese su telefono" value="{{{ isset($persona->numero) ? $persona->numero : ''}}}"><br>

       </div> 




   
<button type="subitm" class="btn gray">Guardar</button>
  </form>
@stop
