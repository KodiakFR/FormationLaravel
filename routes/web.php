<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function(){

Route::get('/','index')->name('index');


Route::get('/{slug}-{post}','show')->where(
    [
        'id' => '[0-9]+',
        'slug' => '[a-z0-9/-]+'
    ]
    )->name('show');
});
