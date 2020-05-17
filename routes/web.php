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

Route::get('/', function(){
    return view('index');
});
Route::get('/index', function(){
    return view('index');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/prompt', function(){
    return view('prompt');
});
Route::get('/tips', function(){
    return view('tips');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/terms', function(){
    return view('terms');
});
// Route::get('/welcome', function(){
//     return view('welcome');
// });
Route::post('/welcome', 'LocationController@index');
// Route::post('/getlocation','LocationController@saveloc');


