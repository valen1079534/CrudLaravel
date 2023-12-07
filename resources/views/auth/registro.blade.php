@extends('layouts.app')

@section('titulopagina')
    Registro
@endsection

@section('contenido')
{{--   <div class="md:w-6-12 p-5">
        <img src="{{asset('img/registrar___5365563673deb11___.jpg')}}" alt="Imagen De registro">
    </div> --}}


            <div class="md:w-4/12 bg-white p-6 rounded-lg drop-shadow-2xl mt-1.5">

                <form action="/crear-cuenta" method="POST" class="pt-6"">
                    @csrf

                        <div class="mb-5">
                            <label for="name" class=" block uppercase text-gray-600 font-bold text-xl">Nombre</label>

                            <input type="text" id="name" name="name" class="border p-1 w-full rounded-lg mb-10 @error('name')border-red-500
                            @enderror" value="{{old('name')}}">

                            @error('nombre')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"{{$message}}></p>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="email" class=" block uppercase text-gray-600 font-bold text-xl">Correo</label>

                            <input type="text" id="email" name="email" class="border p-1 w-full rounded-lg mb-10 ">
                        </div>

                        <div class="mb-5">
                            <label for="password" class=" block uppercase text-gray-600 font-bold text-xl">Password</label>

                            <input type="password" id="password" name="password" class="border p-1 w-full rounded-lg mb-10">
                        </div>

                            <input type="submit" value="crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercarse font-bold w-full p-3 text-white rounded-lg">

                </form>
            </div>

@endsection
