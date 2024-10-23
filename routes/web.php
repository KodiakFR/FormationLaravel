<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function(){

//route pour l'acceuil
Route::get('/','index')->name('index');

//Route pour voir un article
Route::get('/{slug}-{post}','show')->where(
    [
        'id' => '[0-9]+',
        'slug' => '[a-z0-9/-]+'
    ]
    )->name('show');

//route pour formulaire de création
Route::get('/new','create')->name('create');
Route::post('/new', 'store');
Route::get('/{post}/edit','edit')->name('edit');
Route::post('/{post}/edit','update');
});
