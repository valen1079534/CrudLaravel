<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/css/app.css')
        <title>@yield('titulopagina')</title>
    </head>

    <body class="bg-gray-200">
        <header class = "text-3xl p-5 border-b bg-white shadow flex justify-between items-center">

            <h1 class="textt-3xl font-black">
                Empresa
            </h1>

            <nav class="gap-2 items-center">
                <a class="font-bold uppercase text-gray-700 text-xl" href="{{route('loginIndex')}}">LOGIN</a>

                <a class="font-bold uppercase text-gray-700 text-xl" href="{{route('registre')}}">REGISTRO</a>
            </nav>
        </header>

        <main class="font-black flex justify-center text-3xl mb-10">

            <h2 class="font-black texte-center text-3xl mb-10">
                @yield('tituloprincipal')
            </h2>
                @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-800 font-bold uppercase">
        </footer>

        <a href="{{route('registre')}}"></a>

    </body>
</html>
