@extends('layouts.app')

@section('titulopagina')
    Vista
@endsection

@section('contenido')

    <div>
        <button type="submit" class="bg-blue-600 border-blue-100 rounded-lg p-3 my-24"><a href="{{route('Crear')}}">Registrar usuario</a></button>
    </div>
    <br>

    <table class="table-auto my-24">
                <thead>
                    <tr>
                        <th class="bg-gray-400 p-3 border border-b-2">#</th>
                        <th class="bg-gray-400 p-3 border border-b-2">Nombre</th>
                        <th class="bg-gray-400 p-3 border border-b-2">Cedula</th>
                        <th class="bg-gray-400 p-3 border border-b-2">Direccion</th>
                        <th class="bg-gray-400 p-3 border border-b-2">Telefono</th>
                        <th class="bg-gray-400 p-3 border border-b-2">editar</th>
                        <th class="bg-gray-400 p-3 border border-b-2">Eliminar</th>
                    </tr>
                </thead>

        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td class="bg-gray-100 p-3 border border-b-2 px-4 py2" > {{$cliente->id}} </td>
                <td class="bg-gray-100 p-3 border border-b-2 px-4 py2" > {{$cliente->nombre}} </td>
                <td class="bg-gray-100 p-3 border border-b-2 px-4 py2" > {{$cliente->cedula}} </td>
                <td class="bg-gray-100 p-3 border border-b-2 px-4 py2" > {{$cliente->direccion}} </td>
                <td class="bg-gray-100 p-3 border border-b-2 px-4 py2" > {{$cliente->telefono}} </td>

                <td class="bg-gray-100 p-3 border border-b-2 px-4 py2">
                    <button class="bg-yellow-600 border-gray-800 rounded-lg ml-1"><a href="{{url ('clientes.edit' , $cliente->id)}}">editar</a></button>
                </td>

                <td class="bg-gray-100 p-3 border border-b-2 px-4 py2">

                    <form action="{{url ('clientes.destroy' , $cliente->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="bg-red-600 border-gray-800 rounded-lg ml-1">eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
