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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');