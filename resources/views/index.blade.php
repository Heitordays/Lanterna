<h1>
    n sei oq n sei oq lang
</h1>

<div>
    {{-- @if (count($tasks)) --}}
        @forelse ($tasks as $task)
            <div>
            <a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
            </div>
        @empty
            <div>n tem haha tlgd</div>
        @endforelse
    {{-- @endif --}}
</div>

