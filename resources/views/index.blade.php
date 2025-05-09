<h1>
    n sei oq n sei oq lang
</h1>

<div>
    @forelse ($tasks as $task)
        <div>
            @if ($task->id === 1)
                <a href="{{ route('task1.show')}}">{{ $task->title }}</a>
            @elseif ($task->id ===2)
                <a href="{{ route('task2.show')}}">{{ $task->title }}</a>
            @else
                <a href="#">{{ $task->title }}</a>
            @endif
        </div>
    @empty
            <div>n tem haha tlgd</div>
    @endforelse
</div>

