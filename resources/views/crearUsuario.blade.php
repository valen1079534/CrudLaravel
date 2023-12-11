@extends('layouts.app')

@section('titulopagina')
    Registro
@endsection

@section('contenido')
            <div class="md:w-4/12 bg-white p-6 rounded-lg drop-shadow-2xl mt-1.5">

                <form action="{{route('crud.store')}}" method="POST" class="pt-6"">
                    @csrf

                        <div class="mb-5">
                            <label for="name" class=" block uppercase text-gray-600 font-bold text-xl">Nombre</label>

                            <input type="text" id="name" name="name" class="border p-1 w-full rounded-lg mb-10 @error('name')border-red-500
                            @enderror" value="{{old('name')}}">

                            @error('name')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"{{$message}}></p>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="cedula" class=" block uppercase text-gray-600 font-bold text-xl">cedula</label>

                            <input type="number" id="cedula" name="cedula" class="border p-1 w-full rounded-lg mb-10 ">
                        </div>

                        <div class="mb-5">
                            <label for="direccion" class=" block uppercase text-gray-600 font-bold text-xl">direccion</label>

                            <input type="text" id="direccion" name="direccion" class="border p-1 w-full rounded-lg mb-10">
                        </div>


                        <div class="mb-5">
                            <label for="telefono" class=" block uppercase text-gray-600 font-bold text-xl">telefono</label>

                            <input type="number" id="telefono" name="telefono" class="border p-1 w-full rounded-lg mb-10">
                        </div>

                            <input type="submit" value="crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercarse font-bold w-full p-3 text-white rounded-lg">

                </form>
            </div>

@endsection
