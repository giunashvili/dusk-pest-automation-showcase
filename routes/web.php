<?php

use App\Events\Guts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});