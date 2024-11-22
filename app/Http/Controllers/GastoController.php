<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use App\Http\Requests\StoreGastoRequest;
use App\Http\Requests\UpdateGastoRequest;
use App\Models\User;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        if($user->tipo == 'administrador'){
            $registros = Gasto::with(['administrador', 'proveedor'])->get();
        } else {
            $registros = Gasto::with(['administrador', 'proveedor'])
                ->where('user_prov', $user->id)
                ->get();
        }

        return view('gastos.index', compact('registros'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reg = new Gasto();
        $administradores = User::where('tipo', 'administrador')->get();
        $proveedores = User::where('tipo', 'proveedor')->get();
        return view('gastos.form', compact('reg', 'administradores', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGastoRequest $request)
    {
        $registros = Gasto::create($request->all());
        return redirect()->route('gastos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gasto $gasto)
    {
        return view('gastos.show', compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gasto $gasto)
    {
        $reg = $gasto;
        $administradores = User::where('tipo', 'administrador')->get();
        $proveedores = User::where('tipo', 'proveedor')->get();
        return view('gastos.form', compact('reg', 'administradores', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGastoRequest $request, Gasto $gasto)
    {
        $gasto->update($request->all());
        return redirect()->route('gastos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gasto $gasto)
    {
        $gasto->delete();
        return redirect()->route('gastos.index');
    }
}
