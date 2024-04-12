<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleados = Empleado::All();
        return view('empleado.index')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empleado = new Empleado();
        $empleado->codempleado=$request->get('codempleado');
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
        $empleado->nivel=$request->get('nivel');
        $empleado->Telefono=$request->get('telefono');
        $empleado->save();
        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $edit = Empleado::find($id);
        return view('empleado.edit')->with('edit',$edit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $edit =  Empleado::find($id);
        $edit->nombre = $request->get('nombre');
        $edit->apellido = $request->get('apellido');
        $edit->nivel = $request->get('nivel');
        $edit->telefono = $request->get('telefono');
        $edit->save();
        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect('/empleado');
    }
}
