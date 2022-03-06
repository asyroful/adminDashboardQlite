<?php

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

Route::get('/master', function () {
    return view('halaman.master');
});

Route::get('/login', function(){
    return view('layout.app');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index');


//CRUD KATEGORI
Route::get('/kategori/create', 'KategoriController@create');
Route::post('/kategori', 'KategoriController@store');
Route::get('/kategori', 'KategoriController@index');
Route::get('/kategori/{id}', 'KategoriController@show');
Route::get('/kategori/{id}/edit', 'KategoriController@edit');
Route::put('/kategori/{id}', 'KategoriController@update');
Route::delete('/kategori/{id}', 'KategoriController@destroy');

//CRUD PERTANYAAN
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy');

//CRUD JAWABAN
Route::get('/jawaban/create', 'JawabanController@create');
Route::post('/jawaban', 'JawabanController@store');
Route::get('/jawaban', 'JawabanController@index');
Route::get('/jawaban/{id}', 'JawabanController@show');
Route::get('/jawaban/{id}/edit', 'JawabanController@edit');
Route::put('/jawaban/{id}', 'JawabanController@update');
Route::delete('/jawaban/{id}', 'JawabanController@destroy');

//CRUD TIMELINE
Route::get('/timeline', 'TimelineController@index');

//CRUD PROFIL
Route::resource('profil', 'ProfilController')->only([
    'index','update', 'edit'
]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Middleware

Route::get('/', function () {
    //
})->middleware('web');

Route::group(['middleware' => ['web']], function () {
    //
});

Route::middleware(['web', 'subscribed'])->group(function () {
    //
});

