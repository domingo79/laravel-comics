<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouteCompiler;

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
// redirect 
Route::get('/', function () {
    return redirect()->route('comics');
})->name('home');

//--> comics rotte index e show 
Route::get('/comics', function () {
    $comics = config('comics.data');
    // dd($comics);
    return view('comics.index', compact('comics'));
})->name('comics');

Route::get('comics/{id}', function ($id) {
    $comics = config('comics.data');
    // dd($comics);
    if (is_numeric($id) && $id < count($comics) && $id >= 0) {
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comic');
//<-- comics rotte index e show 


Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
