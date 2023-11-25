<?php

use App\Http\Controllers\ContactanosController;
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


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('home', HomeController::class);
// // Route::get('home', ['HomeController::class', 'index']);


// Route::get('ejemplo', function(){
//     echo "Hola desde la ruta de ejemplo";
// });

// Route::get('cursos/create', function(){
//     return "Formulario para crear un nuevo curso";
// });


// Route::get('cursos/{curso}', function($curso){
//     return "Esta es la vista del curso de $curso";
// });

// Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null){
//     if($categoria){
//         return "Es es el curso de $curso, categoria: $categoria";
//     }else{
//         return "Es es el curso de $curso";
//     }
// });
Route::get('/', function(){
    return view('home');
})->name('home');  //listar los todo's

Route::controller(TodoController::class)->group(function(){
    Route::get('todo', 'index')->name("todo.index"); //formulario nueva tarea
    Route::get('todo/create', 'create')->name("todo.create"); //formulario nueva tarea
    Route::get('todo/{task}', 'show')->name("todo.show"); //mostrarme la tarea
    Route::post('todo', 'store')->name('todo.store');
    Route::get('todo/{task}/edit', 'edit')->name('todo.edit');
    Route::put('todo/{task}', 'update')->name('todo.update');
    Route::delete('todo/{task}', 'destroy')->name('todo.destroy');
});

// Route::get('contactanos', function(){
//     return view('contactanos');
// })->name('contactanos');
// Route::resource('todo', TodoController::class);


// Route::get('contactanos', function(){
    
//     Mail::to('chuildeveloper@gmail.com')->send(new App\Mail\ContactanosMailable);
//     return "Gracias por tu mensaje";

// })->name('contactanos');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');