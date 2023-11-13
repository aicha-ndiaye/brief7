<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ajoutEleve', function () {
    return view('eleve.ajoutEleve');
});
Route::get('/modifieEleve', function () {
    return view('eleve.modifier');
});
Route::get('/listeEleve', function () {
    return view('eleve.listeEleve');
});
Route::get('/ajoutNote', function () {
    return view('notes.ajoutNote');
});

Route::get('/listeNote', function () {
    return view('notes.listeNote');
});
Route::get('/acceuil', function () {
    return view('acceuil');
});


