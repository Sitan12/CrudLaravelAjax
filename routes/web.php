<?php

use App\Models\Stagiaire;
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

Route::get('/', function () {
    $stagiaires = Stagiaire::all();
    return view('welcome', compact('stagiaires'));
});


Route::post('/stagiaire/create', 'App\Http\Controllers\StagiaireController@store')->name('stagiaire.store');
Route::delete('/stagiaire/{id}', 'App\Http\Controllers\StagiaireController@destroy')->name('stagiaire.destroy');
Route::put('/stagiaire/edit/{id}', 'App\Http\Controllers\StagiaireController@update')->name('stupdate');
