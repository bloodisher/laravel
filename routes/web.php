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
Route::get('/films',  'FilmController@index');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return ('Hello this is main page');
});
Route::get('/about', "PagesController@about");

Route::get('/films/{genre}/{id}', function ($id, $genre) {
    return ('this is the page with film id = '.$id.' and genre = '.$genre.'');
});
Route::get('/serials', "PagesController@serials");
Route::get('/multfilms', "PagesController@multfilms");

Route::get('/serials/{genre}/{id}', "PagesController@genre");

Route::get('/ownerpage', function () {
    $films = App\Models\FilmOwner::all();
    return view('pages.ownerpage',compact('films'));
});

Route::get('/owner/film/{id}', function ($id) {
    $allFilms = App\Models\FilmOwner::find($id)->films;
    return view('pages.ownerpage_films',compact('allFilms'));
});

Route::get('/genres/{id}', function ($id) {
    $allFilms = App\Models\Films::find($id);
    return view('pages.genres',compact('allFilms'));
});

Route::get('/all/film/{id}', function ($id) {
    $allFilms = App\Models\FilmsGenres::find($id);
    return view('pages.all_films',compact('allFilms'));
});






