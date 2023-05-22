<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $name = "Gennaro";
    return view('home', ["name"=>$name]);
});

Route::get('/page1', function () {
    $name = "Carmelo";
    return view('page1', ["name"=>$name]);
});

Route::get('/page2', function () {
    $name = "Cassandra";
    return view('page2', ["name"=>$name]);
});

Route::get('/page3', function () {
    $name = "Ortensia";
    return view('page3', ["name"=>$name]);
});

Route::get('/page4', function () {
    $name = "Franco";
    return view('page4', ["name"=>$name]);
});
