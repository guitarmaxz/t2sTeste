<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/containers', [App\Http\Controllers\ConteinerController::class, 'index'])->name('conteiners.index');
Route::get('/containers/create', [App\Http\Controllers\ConteinerController::class, 'create'])->name('conteiners.create');
Route::post('/containers/store', [App\Http\Controllers\ConteinerController::class, 'store'])->name('conteiners.store');
Route::delete('/containers/delete/{id}', [App\Http\Controllers\ConteinerController::class, 'delete'])->name('conteiners.delete');
Route::put('/containers/edit/{id}', [App\Http\Controllers\ConteinerController::class, 'edit'])->name('conteiners.edit');
