<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<body>
    <div>

    <h1>
    @foreach (mb_str_split('Tá mt escuro, procure os botões... (aperte "j" pra ligar a lanterna)') as $char)
        <span class="letter">{{ $char }}</span>
    @endforeach
</h1>

        <div class="container">
            @forelse ($tasks as $task)
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
                    {{ $task->title }}
                </a>
            @empty
                <p>Tem nadakkkkkkkkkkkkkj.</p>
            @endforelse
        </div>
    </div>

    <script src="{{ asset('js/aleatorio.js') }}"></script>
    <script src="{{ asset('js/lanterna.js') }}"></script>
</body>
</html>