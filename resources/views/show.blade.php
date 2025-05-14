<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $task->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
</head>


<body>
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>

    @if($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif

    <p>Criado em: {{ $task->created_at }}</p>
    <p>Atualizado em: {{ $task->updated_at }}</p>

    <a href="{{ route('tasks.index') }}" class="back-button">Voltar</a>

    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/lanterna.js') }}"></script>
</body>


</html>