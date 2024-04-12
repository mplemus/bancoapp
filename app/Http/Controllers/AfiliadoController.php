<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Afiliado;


class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $afiliados = Afiliado::All();
        return view('afiliado.index')->with('afiliados',$afiliados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('afiliado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $afiliado = new Afiliado();
        $afiliado->codafiliado=$request->get('codafiliado');
        $afiliado->nombre=$request->get('nombre');
        $afiliado->apellido=$request->get('apellido');
        $afiliado->ciudad=$request->get('ciudad');
        $afiliado->telefono=$request->get('telefono');
        $afiliado->edad=$request->get('edad');
        $afiliado->save();
        return redirect('/afiliado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $afiliados = Afiliado::All();
        $empleado = Empleado::find($id);
        return view('afiliado.index2')->with('empleado',$empleado)->with('afiliados',$afiliados);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $edit = Afiliado::find($id);
        return view('afiliado.edit')->with('edit',$edit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $edit =  Afiliado::find($id);
        $edit->nombre = $request->get('nombre');
        $edit->apellido = $request->get('apellido');
        $edit->ciudad = $request->get('ciudad');
        $edit->telefono = $request->get('telefono');
        $edit->edad = $request->get('edad');
        $edit->save();
        return redirect('/afiliado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $afiliado = Afiliado::find($id);
        $afiliado->delete();
        return redirect('/afiliado');
    }
}
