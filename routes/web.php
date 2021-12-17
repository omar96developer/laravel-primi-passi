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
    $data = [
        'titolo' => 'Benvenuto',
        'intro' => 'Questa è la Home Page di questo sito',
        'links' => [
            'Home',
            'Servizi',
            'Opinioni',
            'Contatti'
        ]

        ];
    return view('home', $data);
})->name('Home');

Route::get('/Servizi', function () {
    $data = [     
        'links' => [
            'Home',
            'Servizi',
            'Opinioni',
            'Contatti'
        ]

        ];
    return view('servizi', $data);
})->name('Servizi');

Route::get('/Opinioni', function () {
    $data = [      
        'links' => [
            'Home',
            'Servizi',
            'Opinioni',
            'Contatti'
        ]

        ];
    return view('opinioni', $data);
})->name('Opinioni');

Route::get('/Contatti', function () {
    $data = [  
        'links' => [
            'Home',
            'Servizi',
            'Opinioni',
            'Contatti'
        ]

        ];
    return view('contatti', $data);
})->name('Contatti');