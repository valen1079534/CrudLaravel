<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
        $clientes = Cliente::all();
        return view('vista', compact('clientes'));
    }


    public function create()
    {
        //

    }


    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nombre' => 'required  | max:50',
            'cedula' => 'required | unique:clientes | max:20',
            'direccion' => 'required | max:50',
            'telefono' => 'required | max:20 | unique:cliente',
        ]);

        $clientes = new Cliente();
        $clientes -> nombre=$request->input('nombre');
        $clientes -> cedula=$request->input('cedula');
        $clientes -> direccion=$request->input('direccion');
        $clientes -> telefono=$request->input('telefono');

        $clientes->save();
        return redirect
    }


    public function show(Cliente $cliente)
    {
        //
    }


    public function edit(Cliente $cliente)
    {
        //
    }


    public function update(Request $request, Cliente $cliente)
    {
        //
    }


    public function destroy(Cliente $cliente)
    {
        //
    }
}
