<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

    Route::view('contact', 'contact')->name('contact');
    Route::view('about', 'about')->name('about');
    Route::get('faq', [\App\Http\Controllers\FAQController::class, 'index'])->name('faq');
    Route::resource('trees', \App\Http\Controllers\TreeController::class);
    Route::post('/tree', [App\Http\Controllers\TreeController::class, 'store']);