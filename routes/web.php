<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/walbong', function (){
    $url = route('home');
    return "<a href='$url'>Home</a><h1>Hello, Walbong!</h1>";
});
