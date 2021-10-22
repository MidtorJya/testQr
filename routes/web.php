<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\TeController;


use App\Http\Controllers\DemoController;

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

// Route::get('/', function () {
//     return view('quran/search');
// });

Route::get('/test', [TestController::class, 'index'])->name('index');
Route::get('/ayat/{surah}', [TestController::class, 'ayat'])->name('ayat');
Route::get('/quran/home', [TestController::class, 'home']);

Route::get('/quran', [QuranController::class, 'index']);
Route::get('/arabic/{datasurah}', [QuranController::class, 'arabic'])->name('arabic');
Route::get('/quran/trans', [QuranController::class, 'translate']);

Route::get('/test2', [TeController::class, 'translate']);
Route::get('/arabic/{datasurah}', [TeController::class, 'arabic'])->name('arabic');

//Route::get('/', [SearchController::class, 'search']);
//Route::get('/', SearchController::class);

Route::get('/demo/home', [DemoController::class, 'index']);
Route::get('/demo/detail', [DemoController::class, 'detail'])->name('detail');
Route::get('/demo/tafseerhome', [DemoController::class, 'tafseer'])->name('tafseer');
//Route::get('/quran/search', [HomeController::class, 'search'])->name('quran.search');

//simple search
Route::get('/search',[SearchController::class, 'search'])->name('web.search');
Route::get('/find',[SearchController::class, 'find'])->name('web.find');

Route::get('/join_table', [DemoController::class, 'join']);


