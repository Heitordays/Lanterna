@extends('layouts.app')

@section('title', 'Edit Task')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT')

        <h1>Editar Tarefa</h1>

        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">Descrição</label>
            <textarea name="description" id="description">{{ old('description', $task->description) }}</textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">Descrição Longa</label>
            <textarea name="long_description" id="long_description">{{ old('long_description', $task->long_description) }}</textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit">Salvar Alterações</button>
        </div>
    </form>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Tem certeza que quer deletar essa task?')">
    @csrf
    @method('DELETE')
    <button type="submit">🗑️ Deletar</button>
</form>

@endsection
