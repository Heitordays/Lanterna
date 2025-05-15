<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ 'ahaha' }}</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>


<body>
    <h1>
        @foreach (mb_str_split('teste') as $char)
            <span class="letter">{{ $char }}</span>
        @endforeach
    </h1>

    <p>
        @foreach (mb_str_split(
            'ai foi too much'
        ) as $char)
            <span class="letter">{{ $char }}</span>
        @endforeach
    </p>

    <a href="{{ route('tasks.index') }}" class="back-button">Voltar</a>

    <script src="{{ asset('js/lanterna.js') }}"></script>
</body>


</html>
