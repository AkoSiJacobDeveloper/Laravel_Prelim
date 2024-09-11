<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('HomePage');
});


Route::get('/items', function () {
    return view('ItemPage');
});


Route::get('/pics', function () {
    return view('PicturePage');
});

