<?php

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


// ROUTE NAVBAR
Route::get('/characters', function () {
  return view('layout.app');
})->name('characters');

Route::get('/', function () {
  $comics = config('comics');
  return view('comicsPage', compact('comics'));
})->name('comicsPage');

Route::get('/movies', function () {
  return view('layout.app');
})->name('movies');

Route::get('/tv', function () {
  return view('layout.app');
})->name('tv');

Route::get('/games', function () {
  return view('layout.app');
})->name('games');

Route::get('/collectibles', function () {
  return view('layout.app');
})->name('collectibles');

Route::get('/videos', function () {
  return view('layout.app');
})->name('videos');

Route::get('/fans', function () {
  return view('layout.app');
})->name('fans');

Route::get('/news', function () {
  return view('layout.app');
})->name('news');

Route::get('/shop', function () {
  return view('layout.app');
})->name('shop');

// ROUTE COMICS

Route::get('/comicsDesc/{index}', function ($index) {
  $comics = config('comics');
  if (!array_key_exists($index, $comics)) {
    abort(404);
  }
  return view('comicsDesc', compact('comics', 'index'));
})->name('comicsDesc');