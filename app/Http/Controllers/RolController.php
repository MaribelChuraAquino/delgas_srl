<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Http\Requests\StoreRolRequest;
use App\Http\Requests\UpdateRolRequest;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Rol::all();
        return view('roles.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reg = new Rol();
        return view('roles.form', compact('reg'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRolRequest $request)
    {
        $registros = Rol::create($request->all());
        return redirect()->route('roles.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Buscar el rol por ID
        $rol = Rol::findOrFail($id);

        // Pasar el rol a la vista
        return view('roles.show', compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reg = Rol::findOrFail($id);
        return view('roles.form', compact('reg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRolRequest $request, $id)
    {
        
        $rol = Rol::findOrFail($id);
        $rolEditado = $request->all();
        
        $rol->update($rolEditado);
        return redirect()->route('roles.index')->with(
            'info',
            [
                'afirmacion' => 'primary',
                'mensaje' => 'Registro actualizado satisfactoriamente',
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {  
        // Buscar el rol por ID
        $rol = Rol::findOrFail($id); // O usa Rol::find($id) si no quieres que lance una excepción

        // Eliminar el rol
        $rol->delete();

        // Redirigir de nuevo a la lista de roles
        return redirect()->route('roles.index');
    }
}
