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
    $title = 'Tutorial Pizza';
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis sit dolorum, minus saepe impedit libero consectetur iure ea adipisci incidunt iusto molestias quisquam voluptatum, repudiandae alias aliquam nostrum corporis animi?';
    return view('home', compact('title', 'text'));
})->name('home');

Route::get('/ingredients', function () {
    $title = 'Ingredienti per la Pizza';
    $ingredients = [
        'Farina', 'Acqua', 'Lievito', 'Sale', 'Pomodoro', 'Mozzarella',
    ];
    return view('ingredients', compact('title', 'ingredients'));
})->name('ingredients');