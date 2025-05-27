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
    <h1>
        @foreach (mb_str_split($task->title) as $char)
            <span class="letter">{{ $char }}</span>
        @endforeach
    </h1>

    <p>
        @foreach (mb_str_split($task->description) as $char)
            <span class="letter">{{ $char }}</span>
        @endforeach
    </p>

    @if($task->long_description)
        <p>
            @foreach (mb_str_split($task->long_description) as $char)
                <span class="letter">{{ $char }}</span>
            @endforeach
        </p>
    @endif

    <p>
        @foreach (mb_str_split('Criado em: ' . $task->created_at) as $char)
            <span class="letter">{{ $char }}</span>
        @endforeach
    </p>

    <p>
        @foreach (mb_str_split('Atualizado em: ' . $task->updated_at) as $char)
            <span class="letter">{{ $char }}</span>
        @endforeach
    </p>

    <a href="{{ route('tasks.index') }}" class="back-button">Voltar</a>
    <a href="{{ route('tasks.edit', $task->id) }}" class="back-button">
    Editar</a>

<div>
<form  method="POST"  action="{{ route('tasks.toggle-complete', ['task' => $task->id]) }}">
    @csrf
    @method('PUT')
    <button type="submit" class="back-button">
        {{ $task->completed ? 'Incompleta' : 'Completa' }}
    </button>
</form>
</div>

    <script src="{{ asset('js/lanterna.js') }}"></script>
</body>


</html>
