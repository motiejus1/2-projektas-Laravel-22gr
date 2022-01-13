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

//Pavienis kelias
Route::get('/', function () {
    return view('welcome');
});

//Keliu(routes) grupe 

// /authors
Route::prefix('authors')->group(function() {
    // index.blade.php
    // create.blade.php
    // edit.blade.php

    // /authors
    Route::get('', 'App\Http\Controllers\AuthorController@index')->name('author.index');
    
    // authors/create
    Route::get('create', 'App\Http\Controllers\AuthorController@create')->name('author.create');
    // authors/edit
    Route::get('edit', 'App\Http\Controllers\AuthorController@edit')->name('author.edit');

});

//Author

// /authors - matau autorius
// /authors/create
// /authors/edit?id=4





//Book