@extends('layouts.app')

@section('title', 'edit Task')

@section('styles')

@section('content')

<head>
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>

<form method="POST" action="{{ route('tasks.update', $task->id) }}">
    @csrf
    @method('PUT')
 

<h1>tralalero</h1>
<div>
    <label for="title">
    </label>
    <input type="text" name="title" id="title" value="{{ $task->title }}" />
    @error('title')
        <p class="error-message">{{ $message }}</p>
    @enderror
</div> 

<div>
    <label for="description">Description</label>
    <textarea name="description" id="description" rows="5">{{ $task->description }}</textarea> 
    @error('description')
    <p class="error-message">{{ $message }}</p>
    @enderror
</div>


<div>
    <label for="long_description">Long Description</label>
    <textarea name="long_description" id="long_description" rows="10">{{ $task->long_description }}</textarea> 
    @error('long_description')
    <p class="error-message">{{ $message }}</p>
    @enderror
</div>


<div>
<button type="submit">edit task</button>
    @error('submit')
    <p class="error-message">{{ $message }}</p>
    @enderror
</div>

</form>

@endsection