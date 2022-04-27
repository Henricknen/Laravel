<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/show.jpg" alt="logo">
                    </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Eventos</a>
                            </li>

                            <li class="nav-item">
                                <a href="/" class="nav-link">Criar Eventos</a>
                            </li>

                            <li class="nav-item">
                                <a href="/" class="nav-link">Entrar</a>
                            </li>

                            <li class="nav-item">
                                <a href="/" class="nav-link">Cadastrar</a>
                            </li>
                        </ul>

                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>Luis Henrique S F &copy; 2022</p>
        </footer>

    </body>
</html>
