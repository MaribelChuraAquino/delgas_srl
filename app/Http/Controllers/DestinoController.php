<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use App\Models\Contrato;
use App\Http\Requests\StoreDestinoRequest;
use App\Http\Requests\UpdateDestinoRequest;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Obtén el id del usuario logueado
    $userId = auth()->id();

    // Verifica el tipo de usuario
    if (auth()->user()->tipo == 'administrador') {
        // Si es administrador, obtén todos los destinos
        $registros = Destino::all();
    } else {
        // Si es cliente, obtén los contratos del usuario logueado
        $contratos = Contrato::where('user_id', $userId)->pluck('id');

        // Filtra los destinos basándote en los contratos
        $registros = Destino::whereIn('contrato_id', $contratos)->get();
    }
    return view('destinos.index', compact('registros'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contratos = Contrato::where('tipo', 'cliente')->get();
        $reg = new Destino();
        return view('destinos.form', compact('contratos', 'reg'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDestinoRequest $request)
    {
        $registros = Destino::create($request->all());
        return redirect()->route('destinos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destino $destino)
    {
        return view('destinos.show', compact('destino'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destino $destino)
    {
        $contratos = Contrato::all();
        $reg = $destino;
        return view('destinos.form', compact('contratos', 'reg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinoRequest $request, Destino $destino)
    {
        $destino->update($request->all());
        return redirect()->route('destinos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destino $destino)
    {
        $destino->delete();
        return redirect()->route('destinos.index');
    }
}
