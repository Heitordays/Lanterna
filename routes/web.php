<?php
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function ()  {
    return redirect()->route('tasks.index');
});


Route::get('/tasks', function () {
    return view('index', [
        'tasks' => \App\Models\Task::latest()->get()
    ]);
})->name('tasks.index');

 Route::view('/tasks/create', 'create')
     ->name('tasks.create');


Route::get('/tasks/{id}', function ($id){
    return view('show', [
      'task' => \App\Models\Task::findOrFail($id)]);
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
})->name('task.store');