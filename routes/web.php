<?php

use App\Http\Controllers\Alunos;
use App\Http\Controllers\AlunosController;
use Illuminate\Support\Facades\Route;

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
Route::get('/create', [AlunosController::class, 'create'])->name('alunos.create');
Route::post('/store', [AlunosController::class, 'store'])->name('alunos.store');

Route::get('/index', [AlunosController::class, 'index'])->name('alunos.index');
Route::get('/edit/{id}', [AlunosController::class, 'edit'])->name('alunos.edit');
Route::put('/update/{id}', [AlunosController::class, 'update'])->name('alunos.update');

Route::delete('/delete{id}', [AlunosController::class, 'destroy'])->name('alunos.destroy');