<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\SatuController;
use App\Http\Controllers\DuaController;




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
#Mebuat Closure 
Route::get('/', function() {
    return view('welcome');
});

Route::get('/about-me', function () {
    return "Nama Saya : <br> <b>Ghofur Firdaus</b>";
});
Route::get('/Closure', function () {
    return "Belajar membuat Closure";
});
Route::get('/Closure1', function () {
    return "Belajar membuat Closure 1";
});
Route::get('/Closure2', function () {
    return "Belajar membuat Closure 2";
});
Route::get('/Closure3', function () {
    return "Belajar membuat Closure 3";
});


Route::get('/testing-view', function() {
    return view('view-1');
});

Route::get("/utama/test",[UtamaController::class,"test"]);

#Controller 1
Route::get("/belajar1",[SatuController::class,"test1"]);
Route::get("/belajar2",[SatuController::class,"test2"]);
Route::get("/belajar3",[SatuController::class,"test3"]);

#Controller 2
Route::get("/belajar4",[DuaController::class,"test4"]);
Route::get("/belajar5",[DuaController::class,"test5"]);
Route::get("/belajar6",[DuaController::class,"test6"]);
