<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-4">
        <ul class="flex items-center">
            <li><a href=""class="p-3">Home</a></li>
            <li><a href=""class="p-3">Painel</a></li>
            <li><a href=""class="p-3">Post</a></li>
        </ul>
        <ul class="flex items-center">
            @auth()
                <li><a href=""class="p-3">Pedro Julio</a></li>
                <li><a href=""class="p-3">Sair</a></li>
            @endauth
            @guest
                <li><a href="{{route('login')}}"class="p-3">Entrar</a></li>
                <li><a href="{{route('register')}}"class="p-3">Cadastrar</a></li>
            @endguest
            
        </ul>
    </nav>
    @yield('content')
</body>

</html>