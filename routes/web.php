<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd();
});

Route::get('/', function () {
    return view('welcome');
});
