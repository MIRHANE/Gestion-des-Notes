<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/navbar',function(){
    return view ('include.navbar');
});

Route::get('/slidbar',function(){
    return view ('include.slidbar');
});

Route::get('/index',function(){
    return view ('index');
});

Route::get('/etudiant',function(){
    return view ('etudiant');
});