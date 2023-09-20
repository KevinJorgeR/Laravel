<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
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

/*
Route::get('/', function () {
    return view('home');
});

Route::get('/area', function () {
    return view('area');
});
*/

Route::view('/', 'principal')->name('principal');
//Route::view('/', 'estudiantes')->name('estudiantes');
Route::view('/profesores', 'profesores')->name('profesores');
Route::view('/asignaturas', 'asignaturas')->name('asignaturas');
Route::view('/horarios', 'horarios')->name('horarios');
Route::view('/notas', 'notas')->name('notas');

//ROUTER ESTUDIANTES
Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes');

Route::get('/estudiantes/crear', [EstudianteController::class, 'create'])->name('estudiantes.create');

Route::get('/estudiantes/{estudiantes}/editar', [EstudianteController::class, 'edit'])->name('estudiantes.edit');

Route::put('/estudiantes/{estudiantes}', [EstudianteController::class, 'update'])->name('estudiantes.update');

Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes');

Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])->name('estudiantes.show');

Route::delete('/estudiantes/{estudiantes}', [EstudianteController::class, 'destroy'])->name('estudiantes.destroy');





