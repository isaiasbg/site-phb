<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Meu Site')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1>Meu Site</h1>
            <nav>
                <ul>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/contato">Contato</a></li>
                    <li><a href="/estabelecimentos">Estabelecimentos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Meu Site. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
