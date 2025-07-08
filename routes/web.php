<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $pessoa = [
        "nome" => "Ramon",
        "email" => "ramon@email.com ",
    ];

    dd($pessoa);

    return view('welcome');
});

Route::view('/about', 'about');

Route::get('/product/{id}', function(string $id) {
    return "Works!  {$id}";
})->whereNumber('id');
