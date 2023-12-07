@extends('layouts.app')

@section('titulopagina')
    Login
@endsection

@section('contenido')

<div class="md:w-4/12 bg-white p-6 rounded-lg drop-shadow-2xl py-3 my-24">

    <form action="POST">
        @csrf

        <div class="mb-5">
            <label for="email" class=" block uppercase text-gray-600 font-bold text-xl">Correo</label>

            <input type="text" id="email" name="email" class="border p-1 w-full rounded-lg mb-10 ">
        </div>

            <div class="mb-5">
                <label for="password" class=" block uppercase text-gray-600 font-bold text-xl">Password</label>

                <input type="password" id="password" name="password" class="border p-1 w-full rounded-lg mb-10">
            </div>

                <input type="submit" value="Login" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercarse font-bold w-full p-3 text-white rounded-lg">

    </form>
</div>



@endsection
