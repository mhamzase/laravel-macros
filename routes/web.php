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
use Illuminate\Support\Str;

Route::get('/', function () {
    // dd(Str::sumOfTwoNumbers(5,9));  // implementation of the code in AppServiceProvier boot

    dd(Str::prefix('USER',23423));
    return view('welcome');
});
