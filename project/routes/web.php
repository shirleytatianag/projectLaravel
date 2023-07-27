<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
 /*


Route::get('buscar', function (Request $request) {
 Route::get('/', [PageController::class, 'home'])->name('home');
    return $request->all();
    });
 */

Route::controller(PageController::class)->group(function (){
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});
