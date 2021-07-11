<?php

use App\Http\Controllers\KuesionerController;
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

Route::get('/kuesioner', [KuesionerController::class, 'index'])->name('kuesioner');
Route::post('/kuesioner', [KuesionerController::class, 'simpan']);
Route::view('/', 'homepage')->name('homepage');
Route::view('/selesai', 'selesai')->name('selesai');
Route::any('kuesioner/fetch',[KuesionerController::class, 'fetch'])->name('kuesioner.fetch');
Route::get('/ajax-name', [KuesionerController::class, 'ajax']);