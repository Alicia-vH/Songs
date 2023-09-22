<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

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
Route::get('/songs', [SongController::class, 'index'])  -> name('songs.index');
Route::get('/songs/create', [SongController::class, 'create'])  -> name('songs.create');
Route::get('/songs/{index}', [SongController::class, 'show'])  -> name('songs.show');
Route::get('/songs/{index}/edit', [SongController::class, 'edit'])  -> name('songs.edit');
