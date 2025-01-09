<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
   
});
 Route::get('/new', function () {
    return view('home');
   
 });
 Route::get('/log', function () {
    return view('login');
   
 });
 Route::get('/bog', function () {
    return view('blog');
   
 });
 