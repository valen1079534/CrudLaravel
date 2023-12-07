@extends('layouts.app')

@section('titulopagina')
    Vista
@endsection

@section('contenido')

<button type="submit" > <a href="{{route('Crear')}}">Registrar usuario</a> </button>
<br>
<table class="table-auto">
    <thead>
      <tr>
        <th class="bg-gray-400 p-3 border border-b-2 ">#</th>
        <th class="bg-gray-400 p-3 border border-b-2 ">Nombre</th>
        <th class="bg-gray-400 p-3 border border-b-2 ">Cedula</th>
        <th class="bg-gray-400 p-3 border border-b-2 ">Direccion</th>
        <th class="bg-gray-400 p-3 border border-b-2 ">Telefono</th>
        <th class="bg-gray-400 p-3 border border-b-2 ">Controladores</th>
      </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td> {{$cliente->id}} </td>
            <td> {{$cliente->nombre}} </td>
            <td> {{$cliente->cedula}} </td>
            <td> {{$cliente->direccion}} </td>
            <td> {{$cliente->telefono}} </td>

            <td>
                <button>actualizar usuario</button>
            </td>
            <td>
                <form action="">
                    <button>eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>





@endsection
