<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Http\Requests\StoreContratoRequest;
use App\Http\Requests\UpdateContratoRequest;
use App\Models\User;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        if($user->tipo == 'administrador'){
            $registros = Contrato::with(['cliente', 'proveedor'])->get();
        } else {
            $registros = Contrato::with(['cliente', 'proveedor'])
                ->where('user_id', $user->id)
                ->get();
        }

        
        return view('contratos.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = User::where('tipo', 'cliente')->get();
        $proveedores = User::where('tipo', 'proveedor')->get();
        $reg = new Contrato();
        return view('contratos.form', compact('clientes', 'proveedores', 'reg'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContratoRequest $request)
    {
        $filePath = null;
        $nombreOriginal = null;
        if ($request->hasFile('documento')) {
            $filePath = $request->file('documento')->store('documentos', 'public');
            $nombreOriginal = $request->file('documento')->getClientOriginalName();
        }

        $userId = $request->tipo == 'cliente' ? $request->user_id_cliente : $request->user_id_proveedor;
        Contrato::create([
            'tipo' => $request->tipo,
            'user_id' => $userId,
            'nombre_contrato' => $request->nombre_contrato,
            'fecha' => $request->fecha,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'tipo_producto' => $request->tipo_producto,
            'estado'        => $request->estado,
            'documento' => $filePath,
        ]);

        return redirect()->route('contratos.index')->with('success', 'Contrato creado exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Contrato $contrato)
    {
        return view('contratos.show', compact('contrato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contrato $contrato)
    {
        $clientes = User::where('tipo', 'cliente')->get();
        $proveedores = User::where('tipo', 'proveedor')->get();
        $reg = $contrato;
        return view('contratos.form', compact('clientes', 'proveedores', 'reg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContratoRequest $request, Contrato $contrato)
    {
        if ($request->hasFile('documento')) {
            $filePath = $request->file('documento')->store('documentos', 'public');
            $request->merge(['documento' => $filePath]);
        }

        $request->merge(['user_id' => $request->tipo == 'cliente' ? $request->user_id_cliente : $request->user_id_proveedor]);

        $contrato->update($request->all());
        return redirect()->route('contratos.index')->with('success', 'Contrato actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contrato $contrato)
    {  
        $contrato->delete();
        return redirect()->route('contratos.index')->with('success', 'Contrato eliminado exitosamente.');
    }
}
