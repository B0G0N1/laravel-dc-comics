<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as PageController;
use App\Http\Controllers\ComicController as ComicController;

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
//     $comics = config('db');

//     return view('home', compact('comics'));
// })->name('homepage');


Route::get('/', [PageController::class, 'home'])->name('homepage');
Route::resource('comics', ComicController::class);
