<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $usuarios = Usuario::all();
        return view('usuario.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios = new Usuario();
        $usuarios->name = $request->get('name');
        $usuarios->email = $request->get('email');
        $usuarios->password = $request->get('password');

        $usuarios->save();
          
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show1($id)
    {
        //dd($id);
        $usuario = Usuario::find($id);
        return view('usuario.show')->with('usuario',$usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit($id)
     {
        //dd($id);
         $usuario = Usuario::find($id);
        //  dd($usuario);
         return view('usuario.edit')->with('usuario',$usuario);
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);

        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
        $usuario->password = $request->get('password');

        $usuario->save();
          
        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
