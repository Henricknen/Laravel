<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eventos</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Eventos</h1>
        <img src="/img/festa.webp" alt="festa">
        @if(10 > 5)     <!-- inserindo diretiva -->
            <p>A condição é true</p>        <!-- so apresentara esta paragrafo se a condição for realmente verdadeira -->
        @endif

        <p>Dev: {{ $nome }}</p>

        @if($nome == "fulano")
            <p>O me chamo fulano</p>
        @elseif($nome == "Luis Henrique S F")
            <p>Me chamo {{ $nome }} e em 2022 possuo {{ $idade }} anos</p>
        @else
            <p>O nome não é fulano</p>
        @endif

    </body>
</html>
