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


Route::get('/Home', function () {
    return view('welcome');
});


Route::get('/chi-siamo', function () {
    return view('chisiamo');
});


Route::get('/contatti', function () {
    return view('contatti');
});


Route::get('/storia', function () {
    return view('storia');
});


// Route::get('/Home', function () {
//     return "sono una stringa";
// });
// Route::get('/123', function () {
//     return 123;
// });


// Route::get('/array', function () {
//     $lista = ["uno", 2, "tre"];
//     return "sono la lista " . $lista[0] . " " . $lista[1] . " " . $lista[2];
// });






