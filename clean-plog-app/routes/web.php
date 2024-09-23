<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/' , [PostController::class , 'index'])->name('index');
Route::view('/about' , 'about')->name('about');
Route::view('/contact' , 'contact')->name('contact');
Route::view('/post' , 'post')->name('post');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
