<?php

use Illuminate\Support\Facades\Route;

Route::get('/greeting', function (){
    return view('greeting',['name'=>'fin']);
});
