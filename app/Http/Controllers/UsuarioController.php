<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = User::all();
        return view('usuarios.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::all();
        $reg = new User();
        return view('usuarios.form', compact('roles', 'reg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Obtener el rol_id desde el formulario
        $rol_id = $request->input('rol_id');

        // Buscar el nombre del rol en la base de datos usando el rol_id
        $rol = Rol::find($rol_id); // Asegúrate de tener el modelo Rol

        // Verifica si el rol existe
        if (!$rol) {
            return redirect()->back()->withErrors(['error' => 'Rol no encontrado']);
        }

        $nuevoUsuario = $request->all();
        $nuevoUsuario['password'] = Hash::make($request->password);

        // Aquí almacenamos el id del rol en `rol_id` y el nombre en `tipo`
        $nuevoUsuario['tipo'] = $rol->nombre;

        $usuario = User::create($nuevoUsuario);


        return redirect()->route('usuarios.index')->with(
            'info',
            [
                'afirmacion' => 'success',
                'mensaje' => 'Registro creado satisfactoriamente',
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Buscar el rol por ID
        $user = User::findOrFail($id);

        // Pasar el rol a la vista
        return view('usuarios.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Rol::all();
        $reg = User::findOrFail($id);
        return view('usuarios.form', compact('roles', 'reg'));
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
        $usuario = User::findOrFail($id);
        $usuarioEditado = $request->all();
        if ($usuario->password =! $request->password) {
            $usuarioEditado['password'] = Hash::make($request->password);
        }
        $usuario->update($usuarioEditado);
        return redirect()->route('usuarios.index')->with(
            'info',
            [
                'afirmacion' => 'primary',
                'mensaje' => 'Registro actualizado satisfactoriamente',
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $result = [
            'afirmacion' => 'danger',
            'mensaje' => 'Registro eliminado satisfactoriamente',
        ];
        try {
            $user->delete();
        } catch (\Throwable $th) {
            $result['afirmacion'] = 'danger';
            $result['mensaje'] = 'No es posible eliminar este registro';
        }
        return redirect()->route('usuarios.index')->with('info', $result);
    }
}
