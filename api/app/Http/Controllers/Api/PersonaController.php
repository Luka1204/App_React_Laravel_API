<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return $personas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->nacionalidad = $request->nacionalidad;
        $persona->localidad = $request->localidad;
        $persona->direccion = $request->direccion;
        $persona->dni = $request->dni;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->telefono = $request->telefono;
        $persona->email = $request->email;
        $persona->tipo_atencion = $request->tipo_atencion;
        $persona->tipo_persona = $request->tipo_persona;

        $persona->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        return $persona;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($request->id);
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->nacionalidad = $request->nacionalidad;
        $persona->localidad = $request->localidad;
        $persona->direccion = $request->direccion;
        $persona->dni = $request->dni;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->telefono = $request->telefono;
        $persona->email = $request->email;
        $persona->tipo_atencion = $request->tipo_atencion;
        $persona->tipo_persona = $request->tipo_persona;

        $persona->save();
        return $persona;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::destroy($id);
        return $persona;
    }
}
