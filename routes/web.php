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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/ordinateur', 'OrdiController@displayall')->name('ordis');
Route::get('/ordinateur/{id}', 'OrdiController@displayone')->name('ordis');
Route::get('/marque', 'MarqueController@displayall')->name('marque');
Route::get('/marque/{id}', 'MarqueController@displayone')->name('marque');

Route::get('/compte', 'CompteController@info')->name('compte');

Route::get('/ajoutOrdi/create', 'CompteController@ajoutOrdi')->name('compte');
Route::post('/ajoutOrdi', 'CompteController@store')->name('compte');

Route::get('/modif/update/{id}', 'CompteController@modifOrdi')->name('modif');

Route::get('/addAchat/create/{id}', 'CompteController@addAchat')->name('compte');
Route::post('/addAchat/{id}', 'CompteController@storeAchat');

Route::get('addVendeur/create', 'CompteController@addVendeur');
Route::post('addVendeur', 'CompteController@storeVendeur');

Route::get('addMarque/create', 'CompteController@addMarque');
Route::post('addMarque', 'CompteController@storeMarque');

Route::get('suppression/{id}', 'CompteController@suppOrdi');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/comparateurPro', 'OrdiController@comparateur_pro')->name('ordi');
Route::get('/addFilters', 'OrdiController@addFilters');

Route::get('/comparateurFast', 'OrdiController@comparateur_fast')->name('ordi');
Route::get('/trouvefast', 'OrdiController@result_fast');

Route::get('/test', 'TestController@helloWorld');



