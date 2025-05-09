<?php
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;
class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Sonic basico 1',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sonic contorno',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new Task(
    3,
    'Sonic basico 2',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new Task(
    4,
    'Sonic em pé',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];

Route::get('/', function ()  {
    return redirect()->route('tasks.index');
});


Route::get('/tasks', function () use ($tasks) {
    return view('index', [
        'name' => 'Potiguar',
        'tasks' => $tasks,
    ]);
})->name('tasks.index');

// Route::get('/tasks/1', function () {
//     return view('task1');
// })->name('task1.show');

// Route::get('/tasks/2', function () {
//     return view('task2');
// })->name('task2.show');

// Route::get('/tasks/3', function () {
//     return view('task3');
// })->name('task3.show');

// Route::get('/tasks/4', function () {
//     return view('task4');
// })->name('task4.show');


Route::get('/tasks/{id}', function ($id) use ($tasks) {
    $task = collect($tasks)->firstWhere('id', $id);

    if (!$task) {
        abort(Response::HTTP_NOT_FOUND);
    }

    return view('show', ['task' => $task]);
})->name('tasks.show');

Route::fallback(function () {
    return view('show');
});