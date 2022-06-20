<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');

// Grupos de Rutas en Laravel 9
// Route::controller(CursoController::class)->group(function() {
//     Route::get('cursos', 'index');
//     Route::get('cursos/create', 'create');
//     Route::get('cursos/{curso}', 'show');
// });

// Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

// Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

// Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

// Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

// Esta linea reduce todas las rutas declaradas anteriormente
Route::resource('cursos', CursoController::class);

/*
 * Esto se debe utilizar en caso de que la ruta deba de cambiar asi como para mantener los nombres de las 
 *  variables que se envian a los metodos de las rutas 
**/
// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

Route::view('nosotros', 'nosotros')->name('nosotros');