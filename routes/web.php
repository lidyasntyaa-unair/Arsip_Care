<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Base;
use App\Http\Controllers\secondary;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/base/secondary', [secondary::class, "secondary_isi"]);
Route::get('/base', [Base::class, "hyperlk"]);
Route::get('/base/testing', [secondary::class, "testing"]);
Route::get('/base/coba', [Base::class, "coba"]);

