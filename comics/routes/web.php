<?php

use App\Http\Controllers\PageController;
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
Route::get('/', 'PageController@index')->name('home');

//--> comics rotte index e show 
Route::get('/comics', 'PageController@comics')->name('comics');
Route::get('comics/{id}', 'PageController@comic')->name('comic');
//<-- comics rotte index e show 

Route::get('/characters', 'PageController@characters')->name('characters');
Route::get('/movies', 'PageController@movies')->name('movies');
Route::get('/tv', 'PageController@tv')->name('tv');
Route::get('/games', 'PageController@games')->name('games');
Route::get('/collectibles', 'PageController@collectibles')->name('collectibles');
Route::get('/video', 'PageController@video')->name('video');
Route::get('/fans', 'PageController@fans')->name('fans');
Route::get('/news', 'PageController@news')->name('news');
Route::get('/shop', 'PageController@shop')->name('shop');
