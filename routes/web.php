<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;
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
Route::get('/',[crudController::class,'index'])->name('index');
Route::post('/',[crudController::class,'create'])->name('create');

Route::get('/edit/{id}',[crudController::class,'edit'])->name('edit');
Route::put('/edit/{id}', [crudController::class,'update'])->name('update');
Route::get('/delete/{id}', [crudController::class,'destroy'])->name('destroy');
Route::post('/delete/{id}', [crudController::class,'destroy'])->name('destroy');

