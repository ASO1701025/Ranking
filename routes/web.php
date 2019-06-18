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





Route::get('/login', function(){
    return view('login') ;
});




Route::get('/', 'instantrankingController@top1');

Route::get('/list', 'instantrankingController@themalist');

Route::get('/post', 'instantrankingController@themapost');

Route::get('/user', 'instantrankingController@user');

Route::get('/shinki', 'instantrankingController@shinki');

Route::get('/ditail', 'instantrankingController@ditail');

Route::get('/home', 'instantrankingController@home');




