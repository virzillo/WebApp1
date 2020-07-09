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


Route::get('/', 'PagesController@home')->name('homepage');
Route::get('/impianti', 'SitoImpiantiController@index')->name('Parco impianti');
Route::get('/impianti/{implant:slug}', 'SitoImpiantiController@show')->name('visualizza.impianto');

Route::get('/blog', 'SitoBlogController@index')->name('Blog');
Route::post('/blog', 'SitoBlogController@find')->name('find.blog');
Route::get('/blog/{postcategory:titolo}/categoria', 'SitoBlogController@category')->name('categoria.blog');
Route::get('/blog/{post:slug}', 'SitoBlogController@show')->name('show.blog');

Route::get('/contatti', function () {
    return view('website.pages.contatti');
});
Route::get('/chi-siamo', function () {
    return view('website.pages.chi-siamo');
});


Route::prefix('admin')->middleware('auth')->group(function () {
Route::get('/dashboard', 'PagesController@index');

    Route::get('/utenti', 'UsersController@index')->name('utenti');
    Route::get('/utenti/inserisci', 'UsersController@create');
    Route::post('/utenti/inserisci', 'UsersController@register')->name('crea.utente');
    Route::get('/utenti/{id}', 'UsersController@show')->name('utenti.profilo');
    Route::put('/utenti/{id}', 'UsersController@update')->name('modifica.utente');
    Route::delete('/utenti/{id}', 'UsersController@destroy')->name('elimina.utente');

    // Route::get('/progetti', 'ProjectController@index')->name('progetto');
    // Route::get('/progetti/crea', 'ProjectController@create')->name('crea.progetto');
    // Route::post('/progetti', 'ProjectController@store')->name('salva.progetto');
    // Route::get('/progetti/province', 'ProjectController@province')->name('query.province');
    // Route::get('/progetti/{project}', 'ProjectController@show')->name('mostra.progetto');
    // Route::put('/progetti/{project}', 'ProjectController@update')->name('modifica.progetto');
    // Route::post('/progetti/query/{id}', 'ProjectController@query')->name('query.progetto');
    // Route::post('/progetti/comuni/{val}', 'ProjectController@comuni')->name('query.comuni');
    // Route::delete('/progetti/{project}', 'ProjectController@destroy')->name('elimina.progetto');



    // Route::get('/servizi', 'ServiceController@index')->name('servizi');
    // Route::get('/servizi/crea', 'ServiceController@create')->name('crea.servizio');
    // Route::get('/servizi/{service}', 'ServiceController@edit')->name('mostra.servizio');
    // Route::post('/servizi', 'ServiceController@store')->name('salva.servizio');
    // Route::put('/servizi/{service}', 'ServiceController@update')->name('modifica.servizio');
    // Route::delete('/servizi/{service}', 'ServiceController@destroy')->name('elimina.servizio');


    // Route::get('/categorie', 'CategoryController@index')->name('categorie');
    // Route::get('/categorie/crea', 'CategoryController@create')->name('crea.categoria');
    // Route::get('/categorie/{category}', 'CategoryController@edit')->name('mostra.categoria');

    // Route::put('/categorie/{category}', 'CategoryController@update')->name('modifica.categoria');
    // Route::delete('/categorie/{category}', 'CategoryController@destroy')->name('elimina.categoria');

    Route::get('/implant/province', 'ProjectController@province')->name('query.province');
    Route::post('/implant/query/{id}', 'ProjectController@query')->name('query.progetto');
    Route::post('/implant/comuni/{val}', 'ProjectController@comuni')->name('query.comuni');
    Route::resource('implant' , 'ImplantController');

    Route::resource('service' , 'ServiceController');
    Route::resource('category' , 'CategoryController');
    Route::resource('postcategory' , 'PostCategoryController');
    Route::resource('post' , 'PostController');
    Route::resource('slider' , 'SliderController');


    // Demo routes
    // Route::get('/datatables', 'PagesController@datatables');
    // Route::get('/ktdatatables', 'PagesController@ktDatatables');
    // Route::get('/select2', 'PagesController@select2');
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
