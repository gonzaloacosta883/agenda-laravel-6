<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $personas=Persona::all();
        return view('persona.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $nuevaPersona=new Persona;
        $nuevaPersona->documento=$request->documento;
        $nuevaPersona->nombre=$request->nombre;
        $nuevaPersona->apellido=$request->apellido;
        $nuevaPersona->direccion=$request->direccion;
        $nuevaPersona->numero=$request->numero;
        $nuevaPersona->save();
        return redirect('persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $persona=Persona::findOrFail($id);
        return view('persona.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $persona=Persona::findOrFail($id);
        return view('persona.edit',compact ('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $persona=Persona::findOrFail($id);
        $persona->documento=$request->documento;
        $persona->nombre=$request->nombre;
        $persona->apellido=$request->apellido;
        $persona->direccion=$request->direccion;
        $persona->numero=$request->numero;
        $persona->save();
        return redirect('persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $persona=Persona::findOrFail($id);
        $persona->delete();
        return redirect('persona');
    }

    public function cambiar($id) {
        $persona=Persona::findOrFail($id);
        if($persona->es_familiar==1) {
            $persona->es_familiar=false;
        }else{
            $persona->es_familiar=true;
        }
        $persona->save();
        return view('persona.show', compact('persona'));
    }
}
