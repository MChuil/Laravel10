<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('home', HomeController::class);
// Route::get('home', ['HomeController::class', 'index']);


Route::get('ejemplo', function(){
    echo "Hola desde la ruta de ejemplo";
});

Route::get('cursos/create', function(){
    return "Formulario para crear un nuevo curso";
});


// Route::get('cursos/{curso}', function($curso){
//     return "Esta es la vista del curso de $curso";
// });

Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null){
    if($categoria){
        return "Es es el curso de $curso, categoria: $categoria";
    }else{
        return "Es es el curso de $curso";
    }
});

Route::controller(TodoController::class)->group(function(){
    Route::get('todo', 'index')->name('todo.index');  //listar los todo's
    Route::get('todo/create', 'create')->name("todo.create"); //formulario nueva tarea
    Route::get('todo/{task}', 'show')->name("todo.show"); //mostrarme la tarea
    Route::post('todo', 'store')->name('todo.store');
    Route::get('todo/{task}/edit', 'edit')->name('todo.edit');
    Route::put('todo/{task}', 'update')->name('todo.update');
});



