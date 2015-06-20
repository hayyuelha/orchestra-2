<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix'=>'mock'],function(){
  Route::get('/about',function(){return view('mockup.about');});
  Route::get('/instrument-create',function(){return view('mockup.instrument-create');});
  Route::get('/instrument-read',function(){return view('mockup.instrument-read');});
  Route::get('/landing-page',function(){return view('mockup.landing-page');});
  Route::get('/map',function(){return view('mockup.map');});
  Route::get('/music-create',function(){return view('mockup.music-create');});
  Route::get('/music-read',function(){return view('mockup.music-read');});
  Route::get('/playlist',function(){return view('mockup.playlist');});
  Route::get('/profile',function(){return view('mockup.profile');});
  Route::get('/register',function(){return view('mockup.register');});
  Route::get('/search-result',function(){return view('mockup.search-result');});
});
Route::get('/', function () {
    return view('welcome');
});
