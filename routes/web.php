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
    return View("pages.index");
});

Route::get('/curiosidades', function () {
    return View("pages.curiosidades");
});

Route::get('/filmes', function () {
    return View("pages.filmes");
});

Route::get('/colaboradores', function () {
    return View("pages.colaboradores");
});

Route::get('/contatos', function () {
    return View("pages.contatos");
});