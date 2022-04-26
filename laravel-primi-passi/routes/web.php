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
Route::get('/', function () {
    $parametro = [
        'titolo' => 'questo-il-titolo',
        'descrizione' => 'descrizione blablabla',
    ];
    return view('hello-laravel',$parametro);
})->name('hello-laravel');

Route::get('/pagina1', function () {
    return view('pagina1');
})->name('pagina1');

Route::get('/pagina2', function () {
    return view('pagina2');
})->name('pagina2');

