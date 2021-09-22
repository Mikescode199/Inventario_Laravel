<?php

use Illuminate\Support\Facades\Route;
//use my Controller InventarioMikeController 
use App\Http\Controllers\InventarioMikeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inventario', [InventarioMikeController::class, 'index'])->name('inventario');

// make {{ route('inventario-mikes.create') }}" 
Route::get('/inventario/create', [InventarioMikeController::class, 'create'])->name('inventario-mikes.create');

// inventario-mikes.store create a route 
Route::post('/inventario/store', [InventarioMikeController::class, 'store'])->name('inventario-mikes.store');

// inventario-mikes.index create a route
Route::get('/inventario/index', [InventarioMikeController::class, 'index'])->name('inventario-mikes.index');

// inventario-mikes.destroy crea una ruta
Route::delete('/inventario/destroy/{id}', [InventarioMikeController::class, 'destroy'])->name('inventario-mikes.destroy');

// inventario-mikes.show create a route
Route::get('/inventario/show/{id}', [InventarioMikeController::class, 'show'])->name('inventario-mikes.show');

// inventario-mikes.edit create a route
Route::patch('/inventario/update/{id}', [InventarioMikeController::class, 'update'])->name('inventario-mikes.update');
// inventario-mikes.update
Route::get('/inventario/update/{id}', [InventarioMikeController::class, 'edit'])->name('inventario-mikes.edit');

