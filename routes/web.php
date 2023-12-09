<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EssayController;

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


Route::get('/essay-index',[EssayController::class,'EssayIndex'])->name('essay_index');
Route::post('/essay-add',[EssayController::class,'EssayAdd'])->name('essay_add');
Route::get('/show-allessay',[EssayController::class,'EssayAllShow'])->name('show_allessay');
