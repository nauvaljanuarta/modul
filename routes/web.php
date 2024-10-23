<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/datatable', function () {
    return view('datatable');
});
Route::get('/chart', function () {
    return view('chart');
});
Route::get('/pdf', function () {
    return view('pdf');
});
