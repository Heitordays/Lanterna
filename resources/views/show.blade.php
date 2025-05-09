<body style="background-color:rgb(19, 47, 59);"></body>
<h1>{{$task->title}}</h1>
<p>{{$task->description}}</p>

@if($task->long_description)
    <p>{{ $task->long_description }}</p>
@endif

<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>

<a href="{{ route('tasks.index') }}" 
style=
"display: inline-block;
margin-top: 20px;
padding: 10px 15px;
background-color:rgb(17, 36, 57);
color: white;
text-decoration: none;
border-radius: 5px;">
Voltar.
</a>