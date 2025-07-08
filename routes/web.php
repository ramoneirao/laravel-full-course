<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    $pessoa = [
        "nome" => "Ramon",
        "email" => "ramon@email.com ",
    ];

    dd($pessoa);

    return view('welcome');
});

Route::view('/about', 'about');

Route::get('/sum/{a}/{b}', function (float $a, float $b) {
    $sum = $a + $b;

    return $sum;  
})->whereNumber(['a', 'b']);

Route::controller(CarController::class)->group(function () {
    Route::get('/car', [CarController::class, 'index']);
    Route::get('/my-cars', [CarController::class, 'myCars']);
});
