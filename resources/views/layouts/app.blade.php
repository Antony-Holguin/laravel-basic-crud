<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">

        <title>@yield('title')</title>

        @vite('resources/css/app.css')
    </head>

    <body class="antialiased bg-gray-100">

            <header class="p-5 border-b bg-white shadow">
                <h1 class="text-3xl font-black uppercase text-center">Crud Laravel</h1>
            </header>

           

            <!--Contenido cambiante-->
            <main>
                <h1 class="text-3xl text-center">
                    @yield('title')
                </h1>

                <div class="container">
                    @yield('content')
                </div>
            </main>

            <footer>
                <div class="container">
                    <div class="flex justify-center">
                        <p>Todos los derechos reservados {{now()->year}}</p>
                    </div>
                </div>
            </footer>
        
       
    </body>

    
</html>
