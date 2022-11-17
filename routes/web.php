<?php

use Illuminate\Support\Facades\Route;



Route::get('/', \App\Http\Controllers\WelcomeController::class)->name('welcome');

Route::get('/search/{assetone_id}/{assetttwo_id}', \App\Http\Controllers\SearchController::class)->name('search');
