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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    $dati = [
        'titolo' => 'Benvenuto',
        'intro' => 'Questa è la Home Page di questo sito',
        'altro' => [
            'Servizi',
            'Opinioni',
            'Contatti'
        ]

        ];
    return view('home', $dati);
})->name('homePage');