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
    return view('welcome');
});
Route::get('user/{id}/{name}/{age?}',function ($i,$name,$age="no age "){
    echo "name:: $name  -id::$i  -age::$age";
});
Route::fallback(function (){
   echo "eroooorrroor 440044";
});











