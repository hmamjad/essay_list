<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EssayController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\EssayUpdateController;

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
Route::get('/essay-delete/{id}',[EssayController::class,'EssayDelete'])->name('essay_delete');
Route::get('/essay-edit-form/{id}',[EssayController::class,'EssayEditForm'])->name('essay_edit_form');
Route::post('/essay-update/{id}',[EssayController::class,'EssayUpdate'])->name('essay_update');
Route::get('/essay-print/{id}',[EssayController::class,'EssayPrint'])->name('essay_print');


Route::get('/show-alleditessay',[EssayUpdateController::class,'EssayEditAllShow'])->name('show_alleditessay');
Route::get('/edit_essay-delete/{id}',[EssayUpdateController::class,'Edit_EssayDelete'])->name('edit_essay_delete');
Route::get('/edit-essay-edit-form/{id}',[EssayUpdateController::class,'EditEssayEditForm'])->name('edit_essay_edit_form');
Route::post('/edit-essay-update/{id}',[EssayUpdateController::class,'EditEssayUpdate'])->name('edit_essay_update');
Route::get('/edit_essay-print/{id}',[EssayUpdateController::class,'EditEssayPrint'])->name('edit_essay_print');

// Route::get('/qrcode',[BarcodeController::class,'index'])->name('home.index'); edit_essay_update 
