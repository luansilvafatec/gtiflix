<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/luan', function() {
    echo 'Olá Luan';
});

Route::get('/filmes/{filme}', function($filme) {
    echo 'Acessando dados do filme: '. $filme;
});

Route::view('/conheca', 'sobre');
