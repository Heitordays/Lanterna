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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<div class="garoto" style="position: relative; width: 700px;">
  <img src="images/luz.gif" alt="Luz" style="width: 200px; position: absolute; top: 34%; left: 22%; z-index: 10;">
  <img src="images/snow02.gif" alt="Snow" style="width: 400px; position: absolute; top: 1%; left: 16%; z-index: 11;">
  <img src="{{ asset('images/garoto.png') }}" alt="Descrição da imagem" style="width: 600px; height: auto; z-index: 1;">
</div>

    <div>
    <h1 style="text-align: left; font-size: 50px; letter-spacing: -3px; max-width: 80%">
    @foreach (mb_str_split('"Está muito escuro para ler algo, aperte "j" para iluminar"') as $char)
        <span class="letter">{{ $char }}</span>
    @endforeach
</h1>

<h2>
    @foreach (mb_str_split('Procure um botão para avançar...') as $char)
        <span class="letter">{{ $char }}</span>
    @endforeach
</h2>

<div class="container" style="margin-top: 20px; text-align: left;">
    <a href="{{ route('tasks.create') }}" class="create-button">
        Criar tarefa
    </a>
</div>

<div class="container">
    @forelse ($tasks as $task)
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
            {{ $task->title }}
        </a>
    @empty
        <p>Não há tarefas disponíveis.</p>
    @endforelse
</div>

<div>
    @php
        $msg = "Nós temos (" . $tasks->count() . ") tarefas atualmente";
    @endphp
    @foreach (mb_str_split($msg) as $char)
        <span class="letter">{{ $char }}</span>
    @endforeach
</div>

<div class="flex justify-between items-center mt 10">

    <a href="{{ $tasks->previousPageUrl() }}" style="font-size: 100px !important;">
        &larr;
</a>

    <a href="{{ $tasks->nextPageUrl() }}" style="font-size: 100px !important;">
        &rarr;
    </a>
</div>


   <script src="{{ asset('js/aleatorio.js') }}"></script>
    <script src="{{ asset('js/lanterna.js') }}"></script>
</body>
</html>