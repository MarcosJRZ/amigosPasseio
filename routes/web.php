<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $titulo = 'titulo';
    return view('welcome', compact('titulo'));
});
