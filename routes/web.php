<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/user', function () {
    return view('user');
});

Route::get('/login', function(){
   return view('login') ;
});

Route::get('/', function(){
    return view('home') ;
});

Route::get('/top', function(){
    return view('Top') ;
});

Route::get('/new', function(){
    return view('new') ;
});

Route::get('/postRan', function(){
    return view('postRan') ;
});

Route::get('/thema1', function(){
    return view('thema1') ;
});

Route::get('/thema2', function(){
    return view('thema2') ;
});



