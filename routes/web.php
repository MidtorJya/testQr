<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\TeController;
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

Route::get('/test', [TestController::class, 'index']);
Route::get('/ayat/{surah}', [TestController::class, 'ayat'])->name('ayat');

Route::get('/quran', [QuranController::class, 'index']);
Route::get('/arabic/{datasurah}', [QuranController::class, 'arabic'])->name('arabic');
Route::get('/quran/trans', [QuranController::class, 'translate']);

Route::get('/test2', [TeController::class, 'translate']);
Route::get('/thais/{arabic}', [TeController::class, 'thais'])->name('thais');