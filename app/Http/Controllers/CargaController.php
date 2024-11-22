<?php

namespace App\Http\Controllers;

use App\Models\Carga;
use App\Http\Requests\StoreCargaRequest;
use App\Http\Requests\UpdateCargaRequest;
use App\Models\Destino;
use App\Models\Contrato;
use App\Models\Cisterna;
use App\Models\User;

class CargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        if (auth()->user()->tipo == 'administrador') {

            $registros = Carga::with(['cliente', 'chofer'])->get();

        } else {

            $registros = Carga::with(['cliente', 'chofer'])
            ->where('user_cli', $user->id)
            ->get();
        }

        return view('cargas.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinos = Destino::all();
        $cisternas = Cisterna::all();
        $clientes = User::where('tipo', 'cliente')->with(['contratos' => function($query) {
            $query->where('estado', 'activo')->with('destinos'); // Cargar solo contratos activos con destinos
        }])->get();
        $choferes = User::where('tipo', 'chofer')->get();
        $reg = new Carga();

        return view('cargas.form', compact('destinos', 'cisternas', 'clientes', 'choferes', 'reg'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCargaRequest $request)
    {
        $registros = Carga::create($request->all());
        return redirect()->route('cargas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carga $carga)
    {
        return view('cargas.show', compact('carga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    

    public function edit($id)
    {
        $destinos = Destino::all();
        $cisternas = Cisterna::all();
        $clientes = User::where('tipo', 'cliente')->with(['contratos' => function($query) {
            $query->where('estado', 'activo')->with('destinos'); // Cargar solo contratos activos con destinos
        }])->get();
        $choferes = User::where('tipo', 'chofer')->get();
        
        $reg = Carga::findOrFail($id);
        return view('cargas.form', compact('destinos', 'cisternas', 'clientes', 'choferes', 'reg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCargaRequest $request, Carga $carga)
    {
        $carga->update($request->all());
        return redirect()->route('cargas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carga $carga)
    {
        $carga->delete();
        return redirect()->route('cargas.index');
    }
}
