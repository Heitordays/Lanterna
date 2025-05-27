@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
@endsection

@section('content')
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<form method="POST" action="{{ isset($task) ? route('tasks.update', $task->id) : route('task.store') }}">
    @csrf   
    @isset($task)
        @method('PUT')
    @endisset

    <h1>{{ isset($task) ? 'Editar Tarefa' : 'Criar Nova Tarefa' }}</h1>

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $task->title ?? '') }}">
        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div> 

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5">{{ old('description', $task->description ?? '') }}</textarea>
        @error('description')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description" rows="7">{{ old('long_description', $task->long_description ?? '') }}</textarea>
        @error('long_description')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <button type="submit">
            {{ isset($task) ? 'Update Task' : 'Add Task' }}
        </button>
    </div>
</form>

@isset($task)
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Tem certeza que quer deletar essa task?')">
        @csrf
        @method('DELETE')
        <button type="submit">🗑️ Deletar</button>
    </form>
@endisset

@endsection
