<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BookCatalog\BookCatalogController;

Route::get('/greeting', function (){
    return view('greeting',['name'=>'fin']);
});

Route::prefix('/')->group(function(){
    Route::get('/', [BookCatalogController::class, 'index']);
    Route::get('catalog', [BookCatalogController::class, 'index']);
    Route::get('register', [BookCatalogController::class, 'register']);
});
