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
    return view('home');
});

Route::post('/contact/submit', function () {

    $validated = request()->validate([
        'name' => ['required'],
        'email' => ['required', 'email'],
        'message' => ['required']
    ]);

    return response('Success');
});
