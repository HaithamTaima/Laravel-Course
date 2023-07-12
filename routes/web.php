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
Route::view('freelancer','design.freelancer.index')->name('freelancer');

Route::view('library','design.library.index')->name('library');

Route::prefix('news')->group(function (){
    Route::view('','design.news.index')->name('news');
    Route::view('all','design.news.all-news')->name('news.all');
    Route::view('contact','design.news.contact')->name('news.contact');
    Route::view('detailes','design.news.detailes')->name('news.detailes');
});


Route::prefix('moderna')->group(function (){
    Route::view('','design.moderna.index')->name('moderna');
    Route::view('contact','design.moderna.contact')->name('moderna.contact');
    Route::view('portfolio','design.moderna.portfolio')->name('moderna.portfolio');
    Route::view('blog','design.moderna.blog')->name('moderna.blog');
    Route::view('about','design.moderna.about')->name('moderna.about');
    Route::view('services','design.moderna.services')->name('moderna.services');
    Route::view('team','design.moderna.team')->name('moderna.team');
    Route::view('single','design.moderna.single')->name('moderna.single');
});


Route::prefix('leno')->group(function (){
    Route::view('','design.leno.index')->name('leno');
    Route::view('article','design.leno.article')->name('leno.article');
    Route::view('contact','design.leno.contact')->name('leno.contact');
    Route::view('features','design.leno.features')->name('leno.features');
    Route::view('pricing','design.leno.pricing')->name('leno.pricing');
    Route::view('privacy','design.leno.privacy')->name('leno.privacy');
    Route::view('terms','design.leno.terms')->name('leno.terms');
});


Route::prefix('blog')->group(function (){
    Route::view('','design.blog.index')->name('blog');
    Route::view('contact','design.blog.contact')->name('blog.contact');
    Route::view('about','design.blog.about')->name('blog.about');
    Route::view('post','design.blog.post')->name('blog.post');
});








