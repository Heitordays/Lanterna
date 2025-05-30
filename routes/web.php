<?php
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Task;


Route::get('/', function ()  {
    return redirect()->route('tasks.index');
});


Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->paginate(10)
    ]);
})->name('tasks.index');

 Route::view('/tasks/create', 'create')
     ->name('tasks.create');


Route::get('/tasks/{id}/edit', function ($id){
    return view('edit', [
        'task' => Task::findOrFail($id)]);
})->name('tasks.edit');


Route::get('/tasks/{id}', function ($id){
    return view('show', [
      'task' => Task::findOrFail($id)]);
})->name('tasks.show');

Route::fallback(function () {
    return view('errors.404');
});

Route::post('/tasks', function (Request $request){
    $data=$request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required',
    ]);
    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])
    ->with('success', 'Deu certo!');

})->name('task.store');

Route::put('/tasks/{id}', function ($id, Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required',
    ]);

    $task = Task::findOrFail($id);
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()
        ->route('tasks.show', ['id' => $task->id])
        ->with('success', 'Task updated successfully!');
})->name('tasks.update');

Route::get('/tasks/{id}/edit', function ($id) {
    $task = Task::findOrFail($id);
    return view('edit', compact('task'));
})->name('tasks.edit');

Route::delete('/tasks/{id}', function ($id) {
    $task = Task::findOrFail($id);
    $task->delete();

    return redirect()->route('tasks.index')->with('success', 'Task deletada com sucesso!');
})->name('tasks.destroy');

Route::put('/tasks/{task}/toggle-complete', function (Task $task) {
    $task->toggleComplete();
    return redirect()->back()->with('success', 'Task status atualizado com sucesso!');
})->name('tasks.toggle-complete');
