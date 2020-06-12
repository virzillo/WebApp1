<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->group(function () {
Route::get('/dashboard', 'PagesController@index');

    Route::get('/utenti', 'UsersController@index');
    Route::get('/utenti/inserisci', 'UsersController@create');
    Route::post('/utenti/inserisci', 'UsersController@register')->name('crea.utente');
    Route::get('/utenti/{id}', 'UsersController@show');
    Route::get('/utenti/{id}/modifica', 'UsersController@edit');
    Route::delete('/utenti/{id}/elimina', 'UsersController@destroy')->name('elimina.utente');

    Route::view('/progetti', 'pages.projects.index');
    Route::get('/progetti/crea', 'ProjectController@create')->name('crea.progetto');
    Route::get('/progetti/{id}', 'ProjectController@show')->name('modifica.progetto');

    Route::get('/articoli', 'PostController@index')->name('articoli');

    Route::get('/servizi', 'ServiceController@index')->name('servizi');
    Route::get('/servizi/crea', 'ServiceController@create')->name('crea.servizio');
    Route::get('/servizi/{service}', 'ServiceController@edit')->name('modifica.servizio');
    Route::post('/servizi', 'ServiceController@store')->name('salva.servizio');
    Route::delete('/servizi/{service}', 'ServiceController@destroy')->name('elimina.servizio');



    Route::get('/categorie', 'CategoryController@index')->name('categorie');
    Route::get('/categorie/crea', 'CategoryController@create')->name('crea.categoria');
    Route::get('/categorie/{category}', 'CategoryController@show')->name('mostra.categoria');

    Route::post('/categorie', 'CategoryController@store')->name('salva.categoria');
    Route::put('/categorie/{category}', 'CategoryController@update')->name('modifica.categoria');
    Route::delete('/categorie/{category}', 'CategoryController@destroy')->name('elimina.categoria');



    // Demo routes
    Route::get('/datatables', 'PagesController@datatables');
    Route::get('/ktdatatables', 'PagesController@ktDatatables');
    Route::get('/select2', 'PagesController@select2');
    Route::get('/icons/custom-icons', 'PagesController@customIcons');
    Route::get('/icons/flaticon', 'PagesController@flaticon');
    Route::get('/icons/fontawesome', 'PagesController@fontawesome');
    Route::get('/icons/lineawesome', 'PagesController@lineawesome');
    Route::get('/icons/socicons', 'PagesController@socicons');
    Route::get('/icons/svg', 'PagesController@svg');
    Route::get('/icons/shareserviceicons', 'PagesController@shareserviceicons');

});

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
