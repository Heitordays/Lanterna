<body style="background-color:rgb(19, 47, 59);"></body>
<h1>
    N sei oq n sei oq lang
</h1>

<div>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}"
                style= "display: inline-block;
                margin-top: 20px;
                padding: 10px 15px;
                background-color:rgb(17, 36, 57);
                color: white;
                text-decoration: none;
                border-radius: 5px;">
            {{ $task->title }}
        </a>
        </div>
    @empty
        <div>n tem haha tlgd</div>
    @endforelse
</div>