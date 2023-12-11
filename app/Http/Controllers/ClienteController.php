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
        $this -> validate ($request, [
            'name' => 'required',
            'cedula' => 'required|unique:clientes',
            'direccion' => 'required',
            'telefono' => 'required'
        ]);

        $clientes = new Cliente();
        $clientes -> name = $request -> input('name');
        $clientes -> cedula = $request -> input('cedula');
        $clientes -> direccion = $request -> input('direccion');
        $clientes -> telefono = $request -> input('telefono');
        $clientes->save();
        return redirect(route('vista'));
    }

    public function show(Cliente $cliente)
    {
        //
    }


    public function edit($id)
    {
        //
        $cliente = Cliente::find($id);
        return view('clientes.edit', ['clientes' => $cliente]);
    }


    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name' => 'required',
            'cedula' =>'required',
            'direccion' => 'required',
            'telefono' => 'required'
        ]);

        $clientes = cliente::find($id);
        $clientes -> name = $request -> input('name');
        $clientes -> cedula = $request -> input('cedula');
        $clientes -> direccion = $request -> input('direccion');
        $clientes -> telefono = $request -> input('telefono');
        $clientes -> save();
        return redirect(route('vista'));
    }


    public function destroy($id)
    {
        //
        $cliente =Cliente::find($id);
        $cliente ->delete();
        return redirect()->back();
    }
}
