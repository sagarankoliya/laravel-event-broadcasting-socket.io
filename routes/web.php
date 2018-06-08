<?php

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
    //event(new \App\Events\NewComment("Heloo how are you"));
    return view('welcome');
});


Route::get('/call-event', function () {
    event(new \App\Events\NewComment("Heloo how are you"));
})->name('call.event');
