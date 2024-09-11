<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('Home_page');
});

Route::get('/item', function () {
    return view('Item_page');
});

Route::get('/picture', function () {
    return view('Picture_page');
});
